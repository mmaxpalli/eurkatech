<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Prophecy\Call\Call;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

         // Borramos los datos de la tabla
         App\paciente::truncate();
         DB::table('pacientes')->delete();

         // Borramos los datos de la tabla
         App\medico::truncate();
         DB::table('medicos')->delete();

         // Borramos los datos de la tabla
         App\especialidad::truncate();
         DB::table('especialidads')->delete();

        // Borramos los datos de la tabla
         App\usuario::truncate();
         DB::table('usuarios')->delete();


        // Insertamos datos en la tabla
        DB::table('pacientes')->insert([
            'nombre' => 'Max',
            'apellido' => 'Palli',
            'dni' => '12345678',
            'edad' => '15',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('pacientes')->insert([
            'nombre' => 'Pepito',
            'apellido' => 'Perez',
            'dni' => '8523697',
            'edad' => '30',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('pacientes')->insert([
            'nombre' => 'Maria',
            'apellido' => 'Fernandez',
            'dni' => '74159632',
            'edad' => '18',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        // Insertamos datos en la tabla
        DB::table('medicos')->insert([
            'nombre' => 'Medico',
            'apellido' => 'Uno',
            'dni' => '12345678',
            'edad' => '15',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('medicos')->insert([
            'nombre' => 'Medico',
            'apellido' => 'Dos',
            'dni' => '8523697',
            'edad' => '30',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('medicos')->insert([
            'nombre' => 'Medico',
            'apellido' => 'Tres',
            'dni' => '74159632',
            'edad' => '18',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

          // Insertamos datos en la tabla
          DB::table('especialidads')->insert([
            'descripcion' => 'Medicina General',            
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

         // Insertamos datos en la tabla
         DB::table('especialidads')->insert([
            'descripcion' => 'Ortodoncia',            
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

         // Insertamos datos en la tabla
         DB::table('especialidads')->insert([
            'descripcion' => 'Radiologia',            
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        // Insertamos datos en la tabla
        DB::table('usuarios')->insert([
            'usuario' => 'admin',            
            'password' => 'admin',   
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);




    }
}
