    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('payments', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('detail_project_id');
                $table->enum('status', ['not yet', 'pending', 'completed', 'failed'])->default('not yet');
                $table->timestamps();

                $table->foreign('detail_project_id')->references('id')->on('detail_projects')->onDelete('cascade');
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('payments');
        }
    };
