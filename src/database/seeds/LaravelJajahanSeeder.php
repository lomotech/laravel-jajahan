<?php

use Lomotech\LaravelJajahan\Models\Country;
use Lomotech\LaravelJajahan\Models\State;
use Lomotech\LaravelJajahan\Models\District;
use Lomotech\LaravelJajahan\Models\Subdistrict;
use Illuminate\Database\Seeder;
class ColonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::truncate();
        State::truncate();
        District::truncate();
        SubDistrict::truncate();

        $colonies = json_decode(file_get_contents(__DIR__ . '/colony.json'));
        foreach ($colonies as $colony) {
            $state = State::create([
                'name' => $colony->name,
                'name_long' => $colony->name_long,
                'code2' => $colony->code2,
                'code3' => $colony->code3,
                'capital' => $colony->capital,
            ]);
            $this->command->info('State: ' . $state->name);
            // handle parliament and duns
            if (!empty($colony->parliaments)) {
                foreach ($colony->parliaments as $parliament) {
                    $p = Parliament::create([
                        'state_id' => $state->id,
                        'name' => $parliament->name,
                        'code' => $parliament->code,
                    ]);
                    if (!empty($parliament->duns)) {
                        foreach ($parliament->duns as $dun) {
                            $d = Dun::create([
                                'parliament_id' => $p->id,
                                'state_id' => $state->id,
                                'name' => $dun->name,
                                'code' => $dun->code,
                            ]);
                            $this->command->info('DUN: ' . $dun->name);
                        }
                    }
                }
            }
            // handle districts and sub-districts
            if (!empty($colony->districts)) {
                foreach ($colony->districts as $district) {
                    $dist = District::create([
                        'state_id' => $state->id,
                        'name' => $district->name,
                    ]);
                    $this->command->info('State: ' . $state->name . ', District: ' . $dist->name);
                    if (!empty($district->subdistricts)) {
                        foreach ($district->subdistricts as $subdistrict) {
                            $sd = SubDistrict::create([
                                'district_id' => $dist->id,
                                'name' => $subdistrict->name,
                            ]);
                            $this->command->info('State: ' . $state->name . ', District: ' . $dist->name, ', SubDistrict: ' . $sd->name);
                        }
                    }
                }
            }
        }
    }
}