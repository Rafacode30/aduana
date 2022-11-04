<?php

namespace App\Console\Commands;

use App\Models\Package;
use Illuminate\Console\Command;
use Faker\Factory as Faker;

class PackageCommand extends Command
{
    protected $signature = 'package:create';
    protected $description = 'For create a package';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $k1 = Faker::create();
        $k2= Faker::create();
        $k3 = Faker::create();
        $k4 = Faker::create();
        $k5 = Faker::create();
        $k6 = Faker::create();
        $k7 = Faker::create();
        $k8 = Faker::create();
        $k9 = Faker::create();
        $k10 = Faker::create();

        /* Creating a new array with the values of the variables. */
        $request = [
            'tamaño' => $k1->randomElement(['Pequeño', 'Mediano', 'Grande']),
            'peso' => $k1->randomNumber(2, false),
            'destino' => $k1->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'origen' => $k1->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'sensor' => $k1->randomElement(['Ultrasónico1', 'Ultrasónico2', 'Ultrasónico3', 'de Peso1', 'de Peso2', 'de Peso3']),
        ];

        $request2 = [
            'tamaño' => $k2->randomElement(['Pequeño', 'Mediano', 'Grande']),
            'peso' => $k2->randomNumber(2, false),
            'destino' => $k2->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'origen' => $k2->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'sensor' => $k2->randomElement(['Ultrasónico1', 'Ultrasónico2', 'Ultrasónico3', 'de Peso1', 'de Peso2', 'de Peso3']),
        ];

        $request3 = [
            'tamaño' => $k3->randomElement(['Pequeño', 'Mediano', 'Grande']),
            'peso' => $k3->randomNumber(2, false),
            'destino' => $k3->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'origen' => $k3->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'sensor' => $k3->randomElement(['Ultrasónico1', 'Ultrasónico2', 'Ultrasónico3', 'de Peso1', 'de Peso2', 'de Peso3']),
        ];

        $request4 = [
            'tamaño' => $k4->randomElement(['Pequeño', 'Mediano', 'Grande']),
            'peso' => $k4->randomNumber(2, false),
            'destino' => $k4->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'origen' => $k4->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'sensor' => $k4->randomElement(['Ultrasónico1', 'Ultrasónico2', 'Ultrasónico3', 'de Peso1', 'de Peso2', 'de Peso3']),
        ];

        $request5 = [
            'tamaño' => $k5->randomElement(['Pequeño', 'Mediano', 'Grande']),
            'peso' => $k5->randomNumber(2, false),
            'destino' => $k5->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'origen' => $k5->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'sensor' => $k5->randomElement(['Ultrasónico1', 'Ultrasónico2', 'Ultrasónico3', 'de Peso1', 'de Peso2', 'de Peso3']),
        ];

        $request6 = [
            'tamaño' => $k6->randomElement(['Pequeño', 'Mediano', 'Grande']),
            'peso' => $k6->randomNumber(2, false),
            'destino' => $k6->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'origen' => $k6->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'sensor' => $k6->randomElement(['Ultrasónico1', 'Ultrasónico2', 'Ultrasónico3', 'de Peso1', 'de Peso2', 'de Peso3']),
        ];

        $request7 = [
            'tamaño' => $k7->randomElement(['Pequeño', 'Mediano', 'Grande']),
            'peso' => $k7->randomNumber(2, false),
            'destino' => $k7->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'origen' => $k7->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'sensor' => $k7->randomElement(['Ultrasónico1', 'Ultrasónico2', 'Ultrasónico3', 'de Peso1', 'de Peso2', 'de Peso3']),
        ];

        $request8 = [
            'tamaño' => $k8->randomElement(['Pequeño', 'Mediano', 'Grande']),
            'peso' => $k8->randomNumber(2, false),
            'destino' => $k8->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'origen' => $k8->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'sensor' => $k8->randomElement(['Ultrasónico1', 'Ultrasónico2', 'Ultrasónico3', 'de Peso1', 'de Peso2', 'de Peso3']),
        ];

        $request9 = [
            'tamaño' => $k9->randomElement(['Pequeño', 'Mediano', 'Grande']),
            'peso' => $k9->randomNumber(2, false),
            'destino' => $k9->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'origen' => $k9->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'sensor' => $k9->randomElement(['Ultrasónico1', 'Ultrasónico2', 'Ultrasónico3', 'de Peso1', 'de Peso2', 'de Peso3']),
        ];

        $request10 = [
            'tamaño' => $k10->randomElement(['Pequeño', 'Mediano', 'Grande']),
            'peso' => $k10->randomNumber(2, false),
            'destino' => $k10->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'origen' => $k10->randomElement([
                'Indiana',
                'Texas',
                'California',
                'Florida',
                'Chicago',
                'Luisiana',
                'Colorado',
                'New York',
                'Alamabama',
                'Boston'
            ]),
            'sensor' => $k10->randomElement(['Ultrasónico1', 'Ultrasónico2', 'Ultrasónico3', 'de Peso1', 'de Peso2', 'de Peso3']),
        ];

        $wilkin = Package::create($request);
        $wilkin2 = Package::create($request2);
        $wilkin3 = Package::create($request3);
        $wilkin4 = Package::create($request4);
        $wilkin5 = Package::create($request5);
        $wilkin6 = Package::create($request6);
        $wilkin7 = Package::create($request7);
        $wilkin8 = Package::create($request8);
        $wilkin9 = Package::create($request9);
        $wilkin10 = Package::create($request10);

    }
}
