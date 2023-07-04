<?php

namespace Database\Seeders;

use App\Models\TypesOfDocuments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesOfDocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo1=new TypesOfDocuments();
        $tipo1->abbreviation = 'RC';
        $tipo1->typeDocument = 'Registro civil de nacimiento';
        $tipo1->description = 'El registro civil es el instrumento tanto legal como administrativo por medio del cual el Estado reconoce los derechos y los deberes de los colombianos frente a la sociedad y la familia.';
        $tipo1->save();

        $tipo2=new TypesOfDocuments();
        $tipo2->abbreviation = 'TI';
        $tipo2->typeDocument = 'Tarjeta de identidad';
        $tipo2->description = 'La tarjeta de identidad es el documento de identificación por medio del cual los niños, niñas y adolescentes, desde los 7 años y hasta que adquieren la mayoría de edad, pueden identificarse en todos los actos a que haya lugar y en los que se requiera demostrar su identidad.';
        $tipo2->save();

        $tipo3=new TypesOfDocuments();
        $tipo3->abbreviation = 'CC';
        $tipo3->typeDocument = 'Cedula de ciudadania';
        $tipo3->description = 'La Cédula de Identidad Ciudadana es el documento oficial de identificación, que hace prueba plena sobre los datos de identidad que contiene en relación con su titular.';
        $tipo3->save();

        $tipo4=new TypesOfDocuments();
        $tipo4->abbreviation = 'CE';
        $tipo4->typeDocument = 'Cedula de extranjeria';
        $tipo4->description = 'La cédula de extranjería es expedida por la Unidad Administrativa Especial Migración Colombia, cuya única finalidad es la identificación de los extranjeros en territorio colombiano.';
        $tipo4->save();

        
        $tipo5=new TypesOfDocuments();
        $tipo5->abbreviation = 'NIT';
        $tipo5->typeDocument = 'Identificación Tributaria';
        $tipo5->description = 'Es un número único colombiano que asigna la DIAN (Dirección de Impuestos y Aduanas Nacionales de Colombia) por una sola vez cuando el obligado se inscribe en el RUT (Registro Único Tributario).';
        $tipo5->save();

        $tipo6=new TypesOfDocuments();
        $tipo6->abbreviation = 'PA';
        $tipo6->typeDocument = 'Pasaporte';
        $tipo6->description = 'El pasaporte es el documento oficial de viaje que necesita una persona que desea viajar fuera del país. Este documento solicita a las autoridades extranjeras permitan el libre paso, proporcionen ayuda y protección.';
        $tipo6->save();

        $tipo7=new TypesOfDocuments();
        $tipo7->abbreviation = 'CD';
        $tipo7->typeDocument = 'Carné Diplomático';
        $tipo7->description = 'El “Pasaporte diplomático” es un documento de viaje especial emitido a representantes internacionales de un país y su familia inmediata; está destinado a viajes oficiales al extranjero.';
        $tipo7->save();

        $tipo8=new TypesOfDocuments();
        $tipo8->abbreviation = 'SC';
        $tipo8->typeDocument = 'Salvoconducto';
        $tipo8->description = 'El salvoconducto es el documento de carácter temporal, que expide la Unidad Administrativa Especial Migración Colombia al extranjero que así lo requiera. Este documento podrá ser de dos clases: para salida del país o para permanencia.';
        $tipo8->save();

        $tipo9=new TypesOfDocuments();
        $tipo9->abbreviation = 'PE';
        $tipo9->typeDocument = 'Permiso Especial de Permanencia';
        $tipo9->description = 'es un documento de identificación válido para los nacionales venezolanos en territorio colombiano, el cual les permite permanecer temporalmente en condiciones de regularización migratoria y acceder a la oferta institucional en materia de salud, educación, trabajo ...';
        $tipo9->save();
    }
}
