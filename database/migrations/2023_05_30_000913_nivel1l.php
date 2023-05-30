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
        \DB::statement("
        CREATE OR REPLACE 
        VIEW VALOR_NV1 AS
        SELECT a.ID_MASTER,
        a.LOGIN_MASTER,
        a.SEMANAS_NIVEL1,
        a.VALOR_NIVEL1,
        a.ID_INDICADO,
        date_format((SELECT u.created_at from users u where u.id = a.ID_MASTER),'%y/%m/%d') DT_MASTER,
        date_format((SELECT u.created_at from users u where u.id = a.ID_INDICADO),'%y/%m/%d') DT_INDICADO,
        DATEDIFF(date_format((SELECT u.created_at from users u where u.id = a.ID_INDICADO),'%y/%m/%d'),
                 date_format((SELECT u.created_at from users u where u.id = a.ID_MASTER),'%y/%m/%d')) DIFERENCA,
                CASE WHEN (DATEDIFF(date_format((SELECT u.created_at from users u where u.id = a.ID_INDICADO),'%y/%m/%d'),
                                    date_format((SELECT u.created_at from users u where u.id = a.ID_MASTER),'%y/%m/%d')))>=7
                                    THEN ROUND((A.VALOR_NIVEL1*0.05),2)
                     WHEN (DATEDIFF(date_format((SELECT u.created_at from users u where u.id = a.ID_INDICADO),'%y/%m/%d'),
                                    date_format((SELECT u.created_at from users u where u.id = a.ID_MASTER),'%y/%m/%d')))<0
                                    THEN 0
                                    ELSE ROUND(((A.VALOR_NIVEL1/7)*ABS(DATEDIFF(date_format((SELECT u.created_at from users u where u.id = a.ID_INDICADO),'%y/%m/%d'),
                                                     date_format((SELECT u.created_at from users u where u.id = a.ID_MASTER),'%y/%m/%d'))-7)*0.05),2)
                     
                                    END AS 'VALOR_LIQ'
        
        FROM `afiliado_nivel1` a");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        \DB::statement("DROP VIEW IF EXISTS `VALOR_NV1L`");
    }

    

   
};
