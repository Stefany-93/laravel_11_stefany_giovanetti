<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
{
    DB::table('sandwiches')->update([
        'img' => DB::raw("REPLACE(img, 'public/', '')")
    ]);
}

public function down()
{
    // opzionale: non serve ripristinare
}

};
