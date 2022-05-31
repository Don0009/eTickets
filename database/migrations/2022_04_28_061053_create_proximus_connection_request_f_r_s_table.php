<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProximusConnectionRequestFRSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proximus_connection_request_f_r_s', function (Blueprint $table) {
            $table->id();

//             $table->string('partner');
//             $table->string('identity');
//             $table->text('seller');
//             $table->text('gsm');
//             $table->text('person_type');
//             $table->date('validity_of_id');
//            // $table->text('copy_of_id_card');
//             $table->text('be');

//             $table->text('VAT_is_exempted');
//             $table->text('is_source_of_income');
//             $table->text('number_of_customer');
//             $table->text('is_title');
//             $table->text('name');
//             $table->text('first_name');
//             $table->text('name_of_company');
//             $table->text('street');
//             $table->text('no');
//             $table->text('bus');
//             $table->text('postcode');
//             $table->text('place');
//             $table->text('country');
//             $table->text('email');
//             $table->text('telephone');
//             $table->text('gsm_2');
//             $table->date('date_of_birth');
//             $table->longText('contact_person_name');
//             $table->longText('contact_person_telephone');
//             $table->longText('is_title_2');
//             $table->longText('is_install_address_same');
//             $table->longText('install_address');
//             $table->longText('invoice_receive_method');
//             $table->longText('email_2');
//             $table->longText('gsm_3');
//             $table->string('bank_account_number');
//             $table->longText('adres');
//             $table->string('is_billing_address_same_or_not');
//             $table->string('name_or_number_of_previous_owner');
//             $table->string('wish_to_receive_info_means');


//             // Choose your Package

//             $table->string('tv_packs_options_a')->nullable();
//             $table->string('tv_packs_options_b')->nullable();
//             $table->string('tv_packs_options_c')->nullable();
//             $table->string('tv_packs_options_d')->nullable();



//             //Mobile Phone

//             $table->text('mobile_packs_options_a')->nullable();
//             $table->text('mobile_packs_options_b')->nullable();
//             $table->text('mobile_packs_options_c')->nullable();
//             $table->text('mobile_packs_options_d')->nullable();
//             $table->text('mobile_packs_options_e')->nullable();
//             $table->text('mobile_packs_options_f')->nullable();
//             $table->text('mobile_packs_options_g')->nullable();
//             $table->text('mobile_packs_options_h')->nullable();
//             $table->text('mobile_packs_options_i')->nullable();
//             $table->text('mobile_packs_options_j')->nullable();


//             $table->text('epic_packs_options');
//             $table->text('extra_gb_packs_a')->nullable();
//             $table->text('extra_gb_packs_b')->nullable();
//             $table->text('extra_gb_packs_c')->nullable();







//             //Other packages

//             $table->string('other_packages_starter_a')->nullable();
//             $table->string('other_packages_starter_b')->nullable();
//             $table->string('other_packages_starter_c')->nullable();

//             $table->string('met_mobilus_options_1')->nullable();
//             $table->string('met_mobilus_options_2')->nullable();
//             $table->string('met_mobilus_options_3')->nullable();
//             $table->string('met_mobilus_options_4')->nullable();
//             $table->string('met_mobilus_options_5')->nullable();
//             $table->string('met_mobilus_options_6')->nullable();

//             $table->string('mobilus_full_control_options_1')->nullable();
//             $table->string('mobilus_full_control_options_2')->nullable();
//             $table->string('mobilus_full_control_options_3')->nullable();
//             $table->string('mobilus_full_control_options_4')->nullable();
//             $table->string('mobilus_full_control_options_5')->nullable();




//             //for professional customers


//             $table->string('business_package_types_1')->nullable();
//             $table->string('business_package_types_2')->nullable();
//             $table->string('business_package_types_3')->nullable();

//             $table->string('mobile_business_types')->nullable();
//             $table->string('mobile_business_types')->nullable();
//             $table->string('mobile_business_types')->nullable();
//             $table->string('mobile_business_types')->nullable();
//             $table->string('mobile_business_types')->nullable();
//             $table->string('mobile_business_types')->nullable();

//             $table->text('extra_gb_packs_2_a')->nullable();
//             $table->text('extra_gb_packs_2_b')->nullable();
//             $table->text('extra_gb_packs_2_c')->nullable();




//                 //Other Options

//             $table->string('other_options_packages_1')->nullable();
//             $table->string('other_options_packages_2')->nullable();
//             $table->string('other_options_packages_3')->nullable();
//             $table->string('other_options_packages_4')->nullable();
//             $table->string('other_options_packages_5')->nullable();
//             $table->string('other_options_packages_6')->nullable();
//             $table->string('other_options_packages_7')->nullable();
//             $table->string('other_options_packages_8')->nullable();




//             //Internet

//             $table->string('internet_customer_phase');
//             $table->string('landline_r');

//             $table->string('cell_number_w/o_landline');


//             $table->string('internet_types_1')->nullable();
//             $table->string('internet_types_2')->nullable();
//             $table->string('internet_types_3')->nullable();
//             $table->string('internet_types_4')->nullable();
//             $table->string('internet_types_5')->nullable();
//             $table->string('internet_types_6')->nullable();
//             $table->string('internet_types_7')->nullable();
//             $table->string('internet_types_8')->nullable();

//             $table->string('internet_types_security');



//                 //TV

//             $table->text('tv_customer_phase');
//             $table->text('line_number');
//             $table->text('tv_packages_1')->nullable();
//             $table->text('tv_packages_2')->nullable();
//             $table->text('tv_packages_3')->nullable();


//             $table->text('tv_package_options_1')->nullable();
//             $table->text('tv_package_options_2')->nullable();
//             $table->text('tv_package_options_3')->nullable();
//             $table->text('tv_package_options_4')->nullable();
//             $table->text('tv_package_options_5')->nullable();
//             $table->text('tv_package_options_6')->nullable();
//             $table->text('tv_package_options_7')->nullable();
//             $table->text('tv_package_options_8')->nullable();
//             $table->text('tv_package_options_9')->nullable();



//             // EE

//             $table->text('fixed_line_customer_phase');
//             $table->text('current_line_number');
//             $table->text('current_line_number_text');
//             $table->text('add_cps_document');

//             $table->text('phone_line_package_types_1')->nullable();
//             $table->text('phone_line_package_types_2')->nullable();
//             $table->text('phone_line_package_types_3')->nullable();
//             $table->text('phone_line_package_types_4')->nullable();
//             $table->text('phone_line_package_types_5')->nullable();

//             $table->text('other_tariff_plan_radio');
//             $table->text('other_tariff_plan_text');
//             $table->text('seceret_number_radio');
//             $table->string('seceret_number_text');
//             $table->string('smart_services_radio');
//             $table->string('smart_services_text');

//                 // Optical Fiber F F. GLASVEZEL


//             $table->string('optical_fibre_radio');
//             $table->string('optical_fibre_package_type');
//             $table->string('optical_fibre_package_type_3');


//                     // Multi-line -G


//             $table->string('multi_line_license');
//             $table->string('ip_box_radio');

//                 // Bizz Call Connect H

//             $table->string('bizz_call_connect_radio');


//             // Mobile _ Telephone I


//             $table->longText('mob_tele_pack_type_1')->nullable();;
//             $table->longText('mob_tele_pack_type_2')->nullable();;
//             $table->longText('mob_tele_pack_type_3')->nullable();;
//             $table->longText('mob_tele_pack_type_4')->nullable();;
//             $table->longText('mob_tele_pack_type_5')->nullable();;
//             $table->longText('mob_tele_pack_type_6')->nullable();;
//             $table->longText('mob_tele_pack_type_7')->nullable();;

//             $table->longText('payngo_radio');
//             $table->longText('payngo_text');
//             $table->longText('cell_number_g');
//             $table->longText('cell_number_g_radio');

//             $table->longText('existing_proximus_customer')->nullable();
//             $table->longText('lang');
//             $table->longText('sim_card_number');
//             $table->longText('sim_card_type');
//             $table->longText('make_model_of_device');

//             //RESIDENTIELE MOBIELE TELEFONIE (buiten het pack) I

//             $table->text('residential_met_mobilus_1')->nullable();;
//             $table->text('residential_met_mobilus_2')->nullable();;
//             $table->text('residential_met_mobilus_3')->nullable();;
//             $table->text('residential_met_mobilus_4')->nullable();;
//             $table->text('residential_met_mobilus_5')->nullable();;
//             $table->text('residential_met_mobilus_6')->nullable();;


//             $table->text('residential_met_mobilus_limit_full_1')->nullable();;
//             $table->text('residential_met_mobilus_limit_full_2')->nullable();;
//             $table->text('residential_met_mobilus_limit_full_3')->nullable();;
//             $table->text('residential_met_mobilus_limit_full_4')->nullable();;

//             $table->text('mobile_social_app');
//             $table->text('epic_offer_1')->nullable();;
//             $table->text('epic_offer_2')->nullable();;
//             $table->text('epic_offer_3')->nullable();;

//             $table->text('joint_data_offer');


//             //professional_mobile_telephone I



//             $table->string('bizz_mobile_size_p_i_1')->nullable();
//             $table->string('bizz_mobile_size_p_i_2')->nullable();;
//             $table->string('bizz_mobile_size_p_i_3')->nullable();;
//             $table->string('bizz_mobile_size_p_i_4')->nullable();;
//             $table->string('bizz_mobile_size_p_i_5')->nullable();;

//             $table->string('joint_data_offer_p_i');
//             $table->string('mobile_social_apps_p_i');
//             $table->string('bizz_international_options');


// //                      Business Options

//             $table->string('bizz_switch_i');
//             $table->string('second_number_text');
//             $table->string('second_number_radio');

//                     // MOBILE INTERNET VOOR PC/TABLET I

//             $table->string('mobile_internet_i_size_1');
//             $table->string('mobile_internet_i_size_2');

//             $table->string('international_rome_text');

//             $table->string('voice_data_sms_1')->nullable();
//             $table->string('voice_data_sms_2')->nullable();
//             $table->string('voice_data_sms_3')->nullable();
//             $table->string('voice_data_sms_4')->nullable();
//             $table->string('voice_data_sms_5')->nullable();
//             $table->string('voice_data_sms_6')->nullable();
//             $table->string('voice_data_sms_7')->nullable();
//             $table->string('voice_data_sms_8')->nullable();

//             $table->string('voice_i_1')->nullable();
//             $table->string('voice_i_2')->nullable();
//             $table->string('voice_i_3')->nullable();

//             $table->string('data_i_1')->nullable();
//             $table->string('data_i_2')->nullable();
//             $table->string('data_i_3')->nullable();
//             $table->string('data_i_4')->nullable();
//             $table->string('data_i_5')->nullable();


//             //MODEM EN CONFIGURATI (Modem and Configuration) J

//             $table->string('is_connection_present_in_house');
//             $table->string('mobile_modem_config_type');
//             $table->string('device_delivery_type');
//             $table->string('other_delivery_type');
//             $table->string('other_delivery_type_radio');

//                     // Installation K

//             $table->string('kit_to_install_k');
//             $table->date('date_to_install_k');
//             $table->string('time_of_day_k');
//             $table->string('free_resources');
//             $table->date('desired_employment_date');
//             $table->string('refer_number_k')->nullable();

//                     //Promtion L

//             $table->string('promotion_l');

//               //  ENTRY IN THE TELEPHONE DIRECTORY and with the intelligence service MM

//             $table->string('wish_tbi_tele_directory_m');
//             $table->string('name_or_company_name_m');
//             $table->string('address_choose_m');
//             $table->string('address_choose_m_text');


//             $table->string('consent_m')->nullable();


//             $table->string('comment_n');

//             $table->string('at_o');
//             $table->string('on_o');

//             $table->string('existing_proximus_customer_text');

//             // $table->string('consent_o');
//             // $table->string('consent_o_2');

//             $table->string('doc_id')->nullable();
//             $table->string('doc_sign_url')->nullable();
//             $table->unsignedBigInteger('user_id')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proximus_connection_request_f_r_s');
    }
}
