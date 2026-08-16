<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Elements;
use App\Models\Izotopics;


class ElementsController extends Controller
{
    public function addElement(Request $request)
    {
        $data = [];
        $data['z'] = $request->input('z', 100);
        $data['columns'] = $request->input('columns', 1);
        $data['rows'] = $request->input('rows', 1);
        $data['name'] = $request->input('name', "");
        $data['short'] = $request->input('short', "");
        $data['istab'] = $request->input('istab', 1);
        $save =  $request->input('save');
        if ($save) {

            $validator = Validator::make($data, [
                'z' => [
                    'required',
                    'integer',
                    function ($attribute, $value, $fail) {
                        $exists = Elements::where('z', $value)->exists();
                        if ($exists) {
                            $fail("Pierwiastek o liczbie Z {$value} już istnieje w bazie danych.");
                        }
                    },
                ],
                'rows' => 'required|int',
                'columns' => 'required|int',
                'name' => 'required|string',
                'short' => 'required|string',
            ]);

            if ($validator->fails()) {
                $validated = $validator->errors()->all();


                return view("addElem", ["data" =>  $data, 'errorforms' => implode(", ", $validated)]);
            } else {

                $validated = $validator->validated();
                $e = Elements::create($validated);
                return view("addElem", ["data" => $data, 'succesforms' => "Dodano nowy pierwiastek o id " . $e->id]);
            }
        }

        return view("addElem", ["data" => $data]);
    }

    public function list(Request $request)
    {

        $query = $request->input("q", "");
        $data = Elements::orderBy("z", "asc");
        if ($query != "") {
            $data = $data->where("short", "LIKE", "%" . $query . "%");
        }
        $data = $data->get();
        return view("listelements", ["data" => $data, "q" => $query]);
    }

    public function elementsDetails($id)
    {

        $element = Elements::where("z", $id)->first();
        if (!$element) {
            return redirect("/")->with('success', 'Nie znaleziono pierwiastka');
        }
        $izotopics = Izotopics::where("z", $id)->get();
        return view("elemShow", ["id" => $id, "element" => $element, "izotopics" => $izotopics]);
    }
}
