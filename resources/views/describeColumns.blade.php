 <br /><br />
 ------------------------------<br />
 ## ⚛️ 1. Kolumny dotyczące energii rozpadów (Wartości Q)<br />
 Podczas rozpadu jądro atomowe dąży do stabilności i wyrzuca nadmiar energii. Te kolumny pokazują, ile dokładnie energii (w keV — kiloelektronowoltach) wydzieli się przy konkretnym typie rozpadu: [1, 2]
 <br />
 * Kolumna 32 (qbm) oraz 33 (unc_qb): Energia rozpadu Beta Minus ($Q_{\beta^-}$) oraz jej niepewność. Jeśli spojrzysz na swój Wodór-3 (Tryt) w indeksie [2], kolumna 32 wynosi 18.59202 keV – tyle energii uwalnia Tryt podczas rozpadu. [1]<br />
 * Kolumna 34 (qbm_n) oraz 35 (unc_qbmn): Energia rozpadu Beta Minus połączonego z jednoczesną emisją neutronu ($Q_{\beta^- n}$).<br />
 * Kolumna 36 (qa) oraz 37 (unc_qa): Energia rozpadu Alfa ($Q_{\alpha}$). Dla wodoru są puste, bo wodór jest za lekki na rozpad alfa. [1, 3]<br />
 * Kolumna 38 (qec) oraz 39 (unc_qec): Energia rozpadu Beta Plus / Wychwytu elektronu ($Q_{EC}$). W indeksie [0] dla Wodoru-1 wynosi -782.347 keV (minus oznacza, że reakcja w tę stronę wymagałaby dostarczenia energii). [1, 4]<br />
 <br />
 ------------------------------<br />
 ## 🧬 2. Podstawowe cechy izotopu (Tożsamość)<br />
 <br />
 * Kolumna 0 (z): Liczba atomowa (liczba protonów). Dla wszystkich Twoich rekordów wynosi 1 (bo to Wodór).<br />
 * Kolumna 1 (n): Liczba neutronów w jądrze. Wodór-1 ma 0, Wodór-2 ma 1, Wodór-3 ma 2 itd.<br />
 * Kolumna 2 (symbol): Chemiczny symbol elementu (np. H).<br />
 * Kolumna 5 (abundance) oraz 6 (unc_a): Występowanie w przyrodzie (w %). Wodór-1 (99.9855%), Wodór-2 (0.0145%). Pozostałe izotopy mają tu puste pola, bo są sztuczne/niestabilne i nie występują naturalnie na Ziemi. [5, 6, 7]<br />
 <br />
 ------------------------------<br />
 ## 📐 3. Budowa i właściwości kwantowe jądra<br />
 <br />
 * Kolumna 3 (radius) oraz 4 (unc_r): Promień jądra atomowego (mierzony w femtometrach).<br />
 * Kolumna 8 (energy) oraz 9 (unc_e): Energia stanu wzbudzonego jądra (dla stanów podstawowych, czyli Twoich przykładów, zawsze wynosi 0).<br />
 * Kolumna 7 (energy_shift) oraz 10 (ripl_shift): Flagi tekstowe (np. litera X) używane, gdy dokładna energia wzbudzenia nie jest znana i jest podawana jako przesunięcie relatywne.<br />
 * Kolumna 11 (jp): Spin jądrowy i parzystość (wartość kwantowa, np. 1/2+, 1+).<br />
 * Kolumna 27 (isospin): Izospin jądra (kolejna zaawansowana cecha kwantowa).<br />
 * Kolumna 28 (magnetic_dipole) do 31 (unc_eq): Magnetyczny moment dipolowy oraz elektryczny moment kwadrupolowy (opisują pole magnetyczne i kształt jądra). [8]<br />
 <br />
 ------------------------------<br />
 ## 🧱 4. Trwałość struktury jądra (Energia wiązania)<br />
 Te kolumny mówią o tym, jak mocno "sklejone" jest jądro i ile energii potrzeba, by oderwać od niego cząstki:
 <br />
 * Kolumna 40 (sn) oraz 41 (unc_sn): Energia separacji neutronu. Pokazuje, ile energii trzeba włożyć, by wyrwać z jądra jeden neutron. Jeśli wartość jest ujemna (jak dla Wodoru-4: -1600.0), oznacza to, że jądro nie utrzyma tego neutronu i samoczynnie go wyrzuci (stąd rozpad N).<br />
 * Kolumna 42 (sp) oraz 43 (unc_sp): Energia separacji protonu (energia potrzebna do wyrwania protonu).<br />
 * Kolumna 44 (binding) oraz 45 (unc_ba): Całkowita energia wiązania jądra w przeliczeniu na jeden nukleon. Im wyższa, tym jądro jest stabilniejsze.<br />
 * Kolumna 46 (atomic_mass) do 49 (unc_me): Dokładna masa atomowa izotopu oraz tzw. nadmiar masy (Mass Excess). [6]<br />
 <br />
 ------------------------------<br />
 ## 📂 5. Metadane (Kto i kiedy to zbadał)<br />
 <br />
 * Kolumna 51 (discovery): Rok odkrycia izotopu (np. dla Wodoru-1 to 1920, dla sztucznego Wodoru-5 to 1981).<br />
 * Kolumna 52 (ENSDFpublicationcut-off): Data ostatniej oficjalnej weryfikacji danych dla tego nuklidu.<br />
 * Kolumna 53 (ENSDFauthors): Nazwiska fizyków, którzy wprowadzili i zweryfikowali te dane do międzynarodowej bazy ENSDF.<br />
 * Kolumna 54 (Extraction_date): Data pobrania/wygenerowania rekordu przez serwery IAEA.<br />
 <br /><br />