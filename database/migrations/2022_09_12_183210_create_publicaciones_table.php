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
        Schema::create(self::TABLE, function (Blueprint $table) {
            $table->bigInteger("id");
            $table->bigInteger("userId");
            $table->string("title");
            $table->string("body");
        });

        $records = json_decode(file_get_contents('./data.json'));

        $result = false;
        foreach ($records as $record) {
            $result = self::insertRecord($record);
        }

        if($result) echo "\r\n Data has been inserted sucessfully in " . self::TABLE . " table";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(self::TABLE);
    }

    /**
     * Inserts a given record in the TABLE 
     *
     * @method insertRecord
     * 
     * @param stdClass $record
     *
     * @return bool
     */
    private static function insertRecord(StdClass $record): bool
    {
        $result = DB::table(self::TABLE)->insert([
            'id' => $record->id,
            'userId' => $record->userId,
            'title' => $record->title,
            'body' => $record->body,
        ]);

        if($result) return true;

        return false;
    }
};
