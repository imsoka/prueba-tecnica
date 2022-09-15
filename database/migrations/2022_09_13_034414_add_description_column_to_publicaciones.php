<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * @var string TABLE
     *
     * The name of the table of this migration
     */
    const TABLE = "publicaciones";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable(self::TABLE)){
            Schema::table(self::TABLE, function (Blueprint $table) {
                $table->string('description');
            });
        }

        $records = DB::table(self::TABLE)->select()->get();

        foreach($records as $record) {
            self::updateDescription($record);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(self::TABLE, function (Blueprint $table) {
        });
    }

    /**
     * Update the description of record depending if its ID is even or odd
     *
     * @method updateDescription
     * 
     * @param $record
     *
     * @return bool
     */
    private static function updateDescription($record): bool
    {
        $description = "Impar";
        if(self::isThisNumberEven($record->id)) {
            $description = "Par";
        }

        $result = DB::table(self::TABLE)
            ->where('id', $record->id)
            ->update(['description' => $description]);

        if($result === 1)
            return true;

        return false;
    }

    /**
     * Check if the given integer is even
     *
     * @method isThisNumberEven
     * 
     * @param int $id
     *
     * @return bool
     */
    private static function isThisNumberEven(int $id): bool
    {
        if($id % 2 === 0)
        {
            return true;
        }

        return false;
    }
};
