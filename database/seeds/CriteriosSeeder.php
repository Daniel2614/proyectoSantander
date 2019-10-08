<?php

use Illuminate\Database\Seeder;

class CriteriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criterios')->insert([
        	['categoria'=>'DESEMPEÑO ADMINISTRATIVO', 'aspectoEvaluar'=>'CUMPLIÓ CON LOS REQUERIMIENTOS DEL PLAN DE CLASE CON RESPECTO A LA ENTREGA, EL FORMATO Y  EL CONTENIDO'],
        	['categoria'=>'DESEMPEÑO ADMINISTRATIVO', 'aspectoEvaluar'=>'AL INICIO DEL SEMESTRE, DESGLOSÓ LOS CRITERIOS DE EVALUACIÓN CON LOS CORRESPONDIENTES PORCENTAJES, RECABANDO LA FIRMA DE LOS ESTUDIANTES Y ENTREGANDO EL FORMATO A LA JEFATURA'],
        	['categoria'=>'DESEMPEÑO ADMINISTRATIVO', 'aspectoEvaluar'=>'DURANTE EL PERIODO, PROPORCIONÓ INFORMACIÓN SOBRE LA CONDUCTA, LA ASISTENCIA Y/O EL DESEMPEÑO ACADÉMICO DE SUS ALUMNOS'],
        	['categoria'=>'DESEMPEÑO ADMINISTRATIVO', 'aspectoEvaluar'=>'ASISTIÓ A LAS JUNTAS Y A LOS EVENTOS ACADÉMICOS CONVOCADOS POR LA JEFATURA'],
        	['categoria'=>'COMPROMISO ACADÉMICO', 'aspectoEvaluar'=>'EN CASO DE HABER SIDO CONVOCADO, PARTICIPÓ EN ACTIVIDADES DE TITULACIÓN TALES COMO DIRECCIONES DE TESIS, SINODALÍAS Y/O IMPARTICIÓN DE LA MATERIA DE  SEMINARIO DE TITULACIÓN'],
        	['categoria'=>'COMPROMISO ACADÉMICO', 'aspectoEvaluar'=>'EN CASO DE HABER SIDO CONVOCADO, IMPARTIÓ ASESORÍAS ACADÉMICAS PARA REGULARIZAR A ALUMNOS QUE LO REQUERÍAN Y/O ALUMNOS EN STATUS DE EQUIVALENCIA'],
        	['categoria'=>'COMPROMISO ACADÉMICO', 'aspectoEvaluar'=>'EN CASO DE HABER SIDO CONVOCADO, PARTICIPÓ EN LA REVISIÓN DE PROGRAMAS DE ESTUDIO PARA LA REESTRUCTURACIÓN Y/O ACTUALIZACIÓN DE LA LICENCIATURA'],
        	['categoria'=>'VINCULACIÓN EXTERNA', 'aspectoEvaluar'=>'REALIZÓ VIAJES O VISITAS DE ESTUDIO A EMPRESAS, A CONGRESOS Y/O A INSTITUCIONES GUBERNAMENTALES'],
        	['categoria'=>'VINCULACIÓN EXTERNA', 'aspectoEvaluar'=>'ORGANIZÓ CONFERENCIAS, MESAS REDONDAS Y/O ENTREVISTAS, CON PERSONAS EXTERNAS A LA UNIVERSIDAD'],
        	['categoria'=>'VINCULACIÓN EXTERNA', 'aspectoEvaluar'=>'CONTACTÓ A LOS ALUMNOS CON INSTITUCIONES PARA LA REALIZACIÓN DE ACTIVIDADES ACADÉMICAS, PRÁCTICAS, SERVICIO SOCIAL O TRABAJO'],
        	['categoria'=>'ACTITUD', 'aspectoEvaluar'=>'TIENE APERTURA PARA ACEPTAR SUGERENCIAS DE PARTE DE LA JEFATURA  Y CORREGIR ACTITUDES RESPECTO A SU DESEMPEÑO DOCENTE'],
        	['categoria'=>'ACTITUD', 'aspectoEvaluar'=>'MOSTRÓ CAPACIDAD EN EL MANEJO DE CONFLICTOS CON LOS ALUMNOS'],
        	

        	
        ]);
    }
}
