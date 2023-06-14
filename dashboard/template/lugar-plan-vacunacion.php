<?php
    $municipio = get_post_meta($post->ID, 'municipio', true);
    $place     = get_post_meta($post->ID, 'place', true);
    $address   = get_post_meta($post->ID, 'address', true);
?>

<h3>Municipio de vacunacion</h3>

 <div class="row">
    <div class="col-md-12">
        <h3>Municipio</h3>
        <select id="municipio" name="municipio" value="<?php echo $municipio; ?>">
            <option value="<?php echo $municipio; ?>"><?php echo $municipio; ?></option>

            <option value="Acajete">Acajete</option>
            <option value="Acatlán">Acatlán</option>
            <option value="Acayucan">Acayucan</option>
            <option value="Actopan">Actopan</option>
            <option value="Acula">Acula</option>
            <option value="Acultzingo">Acultzingo</option>
            <option value="Camarón de Tejeda">Camarón de Tejeda</option>
            <option value="Alpatláhuac">Alpatláhuac</option>
            <option value="Alto Lucero de Gutiérrez Barrios">Alto Lucero de Gutiérrez Barrios</option>
            <option value="Altotonga">Altotonga</option>
            <option value="Alvarado">Alvarado</option>
            <option value="Amatitlán">Amatitlán</option>
            <option value="Naranjos Amatlán">Naranjos Amatlán</option>
            <option value="Amatlán de los Reyes">Amatlán de los Reyes</option>
            <option value="Angel R. Cabada">Angel R. Cabada</option>
            <option value="La Antigua">La Antigua</option>
            <option value="Apazapan">Apazapan</option>
            <option value="Aquila">Aquila </option>
            <option value="Astacinga">Astacinga</option>
            <option value="Atlahuilco">Atlahuilco</option>
            <option value="Atoyac">Atoyac</option>
            <option value="Atzacan">Atzacan</option>
            <option value="Atzalan">Atzalan</option>
            <option value="Tlaltetela">Tlaltetela</option>
            <option value="Ayahualulco">Ayahualulco</option>
            <option value="Banderilla">Banderilla</option>
            <option value="Benito Juárez">Benito Juárez</option>
            <option value="Boca del Río">Boca del Río</option>
            <option value="Calcahualco ">Calcahualco </option>
            <option value="Camerino Z. Mendoza">Camerino Z. Mendoza</option>
            <option value="Carrillo Puerto">Carrillo Puerto</option>
            <option value="Catemaco">Catemaco</option>
            <option value="Cazones de Herrera">Cazones de Herrera</option>
            <option value="Cerro Azul">Cerro Azul</option>
            <option value="Citlaltépetl">Citlaltépetl</option>
            <option value="Coacoatzintla">Coacoatzintla</option>
            <option value="Coahuitlán">Coahuitlán</option>
            <option value="Coatepec">Coatepec</option>
            <option value="Coatzacoalcos">Coatzacoalcos</option>
            <option value="Coatzintla">Coatzintla</option>
            <option value="Coetzala">Coetzala</option>
            <option value="Colipa">Colipa</option>
            <option value="Comapa">Comapa</option>
            <option value="Córdoba">Córdoba</option>
            <option value="Cosamaloapan de Carpio">Cosamaloapan de Carpio</option>
            <option value="Cosautlán de Carvajal">Cosautlán de Carvajal</option>
            <option value="Coscomatepec">Coscomatepec</option>
            <option value="Cosoleacaque">Cosoleacaque</option>
            <option value="Cotaxtla">Cotaxtla</option>
            <option value="Coxquihui">Coxquihui</option>
            <option value="Coyutla">Coyutla</option>
            <option value="Cuichapa">Cuichapa</option>
            <option value="Cuitláhuac">Cuitláhuac</option>
            <option value="Chacaltianguis">Chacaltianguis</option>
            <option value="Chalma">Chalma</option>
            <option value="Chiconamel">Chiconamel</option>
            <option value="Chiconquiaco">Chiconquiaco</option>
            <option value="Chicontepec">Chicontepec</option>
            <option value="Chinameca">Chinameca</option>
            <option value="Chinampa de Gorostiza">Chinampa de Gorostiza</option>
            <option value="Las Choapas">Las Choapas</option>
            <option value="Chocamán">Chocamán</option>
            <option value="Chontla">Chontla</option>
            <option value="Chumatlán">Chumatlán</option>
            <option value="Emiliano Zapata">Emiliano Zapata</option>
            <option value="Espinal">Espinal</option>
            <option value="Filomeno Mata">Filomeno Mata</option>
            <option value="Fortín">Fortín</option>
            <option value="Gutiérrez Zamora">Gutiérrez Zamora</option>
            <option value="Hidalgotitlán">Hidalgotitlán</option>
            <option value="Huatusco">Huatusco</option>
            <option value="Huayacocotla">Huayacocotla</option>
            <option value="Hueyapan de Ocampo">Hueyapan de Ocampo</option>
            <option value="Huiloapan de Cuauhtémoc">Huiloapan de Cuauhtémoc</option>
            <option value="Ignacio de la Llave">Ignacio de la Llave</option>
            <option value="Ilamatlán">Ilamatlán</option>
            <option value="Isla">Isla</option>
            <option value="Ixcatepec">Ixcatepec</option>
            <option value="Ixhuacán de los Reyes">Ixhuacán de los Reyes</option>
            <option value="Ixhuatlán del Café">Ixhuatlán del Café</option>
            <option value="Ixhuatlancillo">Ixhuatlancillo</option>
            <option value="Ixhuatlán del Sureste">Ixhuatlán del Sureste</option>
            <option value="Ixhuatlán de Madero">Ixhuatlán de Madero</option>
            <option value="Ixmatlahuacan">Ixmatlahuacan</option>
            <option value="Ixtaczoquitlán">Ixtaczoquitlán</option>
            <option value="Jalacingo">Jalacingo</option>
            <option value="Xalapa">Xalapa</option>
            <option value="Jalcomulco">Jalcomulco</option>
            <option value="Jáltipan">Jáltipan</option>
            <option value="Jamapa">Jamapa</option>
            <option value="Jesús Carranza">Jesús Carranza</option>
            <option value="Xico">Xico</option>
            <option value="Jilotepec">Jilotepec</option>
            <option value="Juan Rodríguez Clara">Juan Rodríguez Clara</option>
            <option value="Juchique de Ferrer">Juchique de Ferrer</option>
            <option value="Landero y Coss">Landero y Coss</option>
            <option value="Lerdo de Tejada">Lerdo de Tejada</option>
            <option value="Magdalena">Magdalena</option>
            <option value="Maltrata">Maltrata</option>
            <option value="Manlio Fabio Altamirano">Manlio Fabio Altamirano</option>
            <option value="Mariano Escobedo">Mariano Escobedo</option>
            <option value="Martínez de la Torre">Martínez de la Torre</option>
            <option value="Mecatlán">Mecatlán</option>
            <option value="Mecayapan">Mecayapan</option>
            <option value="Medellín de Bravo">Medellín de Bravo</option>
            <option value="Miahuatlán">Miahuatlán</option>
            <option value="Las Minas">Las Minas</option>
            <option value="Minatitlán">Minatitlán</option>
            <option value="Misantla">Misantla</option>
            <option value="Mixtla de Altamirano">Mixtla de Altamirano</option>
            <option value="Moloacán ">Moloacán </option>
            <option value="Naolinco">Naolinco</option>
            <option value="Naranjal">Naranjal</option>
            <option value="Nautla">Nautla</option>
            <option value="Nogales">Nogales</option>
            <option value="Oluta">Oluta</option>
            <option value="Omealca">Omealca</option>
            <option value="Orizaba">Orizaba</option>
            <option value="Otatitlán">Otatitlán</option>
            <option value="Oteapan">Oteapan</option>
            <option value="Ozuluama de Mascareñas">Ozuluama de Mascareñas</option>
            <option value="Pajapan">Pajapan</option>
            <option value="Pánuco">Pánuco</option>
            <option value="Papantla">Papantla</option>
            <option value="Paso del Macho">Paso del Macho</option>
            <option value="Paso de Ovejas">Paso de Ovejas</option>
            <option value="La Perla">La Perla</option>
            <option value="Perote">Perote</option>
            <option value="Platón Sánchez">Platón Sánchez</option>
            <option value="Playa Vicente">Playa Vicente</option>
            <option value="Poza Rica de Hidalgo">Poza Rica de Hidalgo</option>
            <option value="Las Vigas de Ramírez">Las Vigas de Ramírez</option>
            <option value="Pueblo Viejo">Pueblo Viejo</option>
            <option value="Puente Nacional">Puente Nacional</option>
            <option value="Rafael Delgado">Rafael Delgado</option>
            <option value="Rafael Lucio">Rafael Lucio</option>
            <option value="Los Reyes">Los Reyes</option>
            <option value="Río Blanco">Río Blanco</option>
            <option value="Saltabarranca">Saltabarranca</option>
            <option value="San Andrés Tenejapan">San Andrés Tenejapan</option>
            <option value="San Andrés Tuxtla">San Andrés Tuxtla</option>
            <option value="San Juan Evangelista">San Juan Evangelista</option>
            <option value="Santiago Tuxtla">Santiago Tuxtla</option>
            <option value="Sayula de Alemán">Sayula de Alemán</option>
            <option value="Soconusco">Soconusco</option>
            <option value="Sochiapa">Sochiapa</option>
            <option value="Soledad Atzompa">Soledad Atzompa</option>
            <option value="Soledad de Doblado">Soledad de Doblado</option>
            <option value="Soteapan">Soteapan</option>
            <option value="Tamalín">Tamalín</option>
            <option value="Tamiahua">Tamiahua</option>
            <option value="Tampico Alto">Tampico Alto</option>
            <option value="Tancoco">Tancoco</option>
            <option value="Tantima">Tantima</option>
            <option value="Tantoyuca">Tantoyuca</option>
            <option value="Tatatila">Tatatila</option>
            <option value="Castillo de Teayo">Castillo de Teayo</option>
            <option value="Tecolutla">Tecolutla</option>
            <option value="Tehuipango">Tehuipango</option>
            <option value="Álamo Temapache">Álamo Temapache</option>
            <option value="Tempoal">Tempoal</option>
            <option value="Tenampa">Tenampa</option>
            <option value="Tenochtitlán">Tenochtitlán</option>
            <option value="Teocelo">Teocelo</option>
            <option value="Tepatlaxco">Tepatlaxco</option>
            <option value="Tepetlán">Tepetlán</option>
            <option value="Tepetzintla">Tepetzintla</option>
            <option value="Tequila">Tequila</option>
            <option value="José Azueta">José Azueta</option>
            <option value="Texcatepec">Texcatepec</option>
            <option value="Texhuacán">Texhuacán</option>
            <option value="Texistepec">Texistepec</option>
            <option value="Tezonapa">Tezonapa</option>
            <option value="Tierra Blanca">Tierra Blanca</option>
            <option value="Tihuatlán">Tihuatlán</option>
            <option value="Tlacojalpan">Tlacojalpan</option>
            <option value="Tlacolulan">Tlacolulan</option>
            <option value="Tlacotalpan">Tlacotalpan</option>
            <option value="Tlacotepec de Mejía">Tlacotepec de Mejía</option>
            <option value="Tlachichilco">Tlachichilco</option>
            <option value="Tlalixcoyan">Tlalixcoyan</option>
            <option value="Tlalnelhuayocan">Tlalnelhuayocan</option>
            <option value="Tlapacoyan">Tlapacoyan</option>
            <option value="Tlaquilpa">Tlaquilpa</option>
            <option value="Tlilapan">Tlilapan</option>
            <option value="Tomatlán">Tomatlán</option>
            <option value="Tonayán">Tonayán</option>
            <option value="Totutla">Totutla</option>
            <option value="Tuxpan">Tuxpan</option>
            <option value="Tuxtilla">Tuxtilla</option>
            <option value="Ursulo Galván">Ursulo Galván</option>
            <option value="Vega de Alatorre">Vega de Alatorre</option>
            <option value="Veracruz">Veracruz</option>
            <option value="Villa Aldama">Villa Aldama</option>
            <option value="Xoxocotla">Xoxocotla</option>
            <option value="Yanga">Yanga</option>
            <option value="Yecuatla">Yecuatla</option>
            <option value="Zacualpan">Zacualpan</option>
            <option value="Zaragoza">Zaragoza</option>
            <option value="Zentla">Zentla</option>
            <option value="Zongolica">Zongolica</option>
            <option value="Zontecomatlán de López y Fuentes">Zontecomatlán de López y Fuentes</option>
            <option value="Zozocolco de Hidalgo">Zozocolco de Hidalgo</option>
            <option value="Agua Dulce">Agua Dulce</option>
            <option value="El Higo">El Higo</option>
            <option value="Nanchital de Lázaro Cárdenas del Río">Nanchital de Lázaro Cárdenas del Río</option>
            <option value="Tres Valles">Tres Valles</option>
            <option value="Carlos A. Carrillo">Carlos A. Carrillo</option>
            <option value="Tatahuicapan de Juárez">Tatahuicapan de Juárez</option>
            <option value="Uxpanapa">Uxpanapa</option>
            <option value="San Rafael">San Rafael</option>
            <option value="Santiago Sochiapan">Santiago Sochiapan</option>  
        </select>
    </div>
    <div class="col-md-12">
        <h3>Lugar o sede </h3>
        <textarea id="place" name="place" rows="5" cols="100" > <?php echo $place; ?> </textarea>

        <h3>Direccion del lugar </h3>
        <textarea id="address" name="address" rows="5" cols="100" > <?php echo $address; ?> </textarea>
    </div>
 </div>

 