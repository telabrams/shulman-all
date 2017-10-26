<?php
/*
 * Plugin name: Insurance Calc
 * Description: настройки для калькулятора
*/

/**
 * Создаем страницу настроек плагина
 */
?>
<?php
add_action( 'admin_menu', 'inscal_add_admin_menu' );
add_action( 'admin_init', 'inscal_settings_init' );


function inscal_add_admin_menu(  ) {

	add_menu_page( 'insurance_calculator', 'Калькулятор ОСАГО', 'manage_options', 'insurance_calculator', 'inscal_options_page' );

}


function inscal_settings_init(  ) {

	register_setting( 'pluginPage', 'inscal_settings' );

	add_settings_section(
		'inscal_pluginPage_section1',
		__( 'Легковий автомобіль', 'wordpress' ),
		'inscal_settings_section_callback1',
		'pluginPage'
	);
	add_settings_section(
		'inscal_pluginPage_section2',
		__( 'Вантажний автомобіль', 'wordpress' ),
		'inscal_settings_section_callback2',
		'pluginPage'
	);
	add_settings_section(
		'inscal_pluginPage_section3',
		__( 'Автобус', 'wordpress' ),
		'inscal_settings_section_callback3',
		'pluginPage'
	);
	add_settings_section(
		'inscal_pluginPage_section4',
		__( 'Мотоцикли та моторолери', 'wordpress' ),
		'inscal_settings_section_callback4',
		'pluginPage'
	);
	add_settings_section(
		'inscal_pluginPage_section5',
		__( 'Причепи', 'wordpress' ),
		'inscal_settings_section_callback5',
		'pluginPage'
	);
	add_settings_section(
		'inscal_pluginPage_section6',
		__( 'Міста України', 'wordpress' ),
		'inscal_settings_section_callback6',
		'pluginPage'
	);
	add_settings_section(
		'inscal_pluginPage_section7',
		__( 'К3', 'wordpress' ),
		'inscal_settings_section_callback7',
		'pluginPage'
	);
	add_settings_section(
		'inscal_pluginPage_section8',
		__( 'К4', 'wordpress' ),
		'inscal_settings_section_callback8',
		'pluginPage'
	);
	add_settings_section(
		'inscal_pluginPage_section9',
		__( 'К5', 'wordpress' ),
		'inscal_settings_section_callback9',
		'pluginPage'
	);
	add_settings_section(
		'inscal_pluginPage_section10',
		__( 'К6', 'wordpress' ),
		'inscal_settings_section_callback10',
		'pluginPage'
	);
	add_settings_section(
		'inscal_pluginPage_section10',
		__( 'К6', 'wordpress' ),
		'inscal_settings_section_callback10',
		'pluginPage'
	);
	add_settings_section(
		'inscal_pluginPage_section11',
		__( 'Кб/м', 'wordpress' ),
		'inscal_settings_section_callback11',
		'pluginPage'
	);
	add_settings_section(
		'inscal_pluginPage_section12',
		__( 'Кпільга', 'wordpress' ),
		'inscal_settings_section_callback12',
		'pluginPage'
	);
	add_settings_section(
		'inscal_pluginPage_section13',
		__( 'Базовий платіж', 'wordpress' ),
		'inscal_settings_section_callback13',
		'pluginPage'
	);

	add_settings_section(
		'inscal_pluginPage_section14',
		__( 'AXA', 'wordpress' ),
		'inscal_settings_section_callback14',
		'pluginPage'
	);
	add_settings_section(
		'inscal_pluginPage_section15',
		__( 'UNIQA', 'wordpress' ),
		'inscal_settings_section_callback15',
		'pluginPage'
	);

	add_settings_section(
		'inscal_pluginPage_section16',
		__( 'Усг', 'wordpress' ),
		'inscal_settings_section_callback16',
		'pluginPage'
	);

	add_settings_section(
		'inscal_pluginPage_section17',
		__( 'ПЗУ', 'wordpress' ),
		'inscal_settings_section_callback17',
		'pluginPage'
	);



	add_settings_field(
		'B1',
		__( 'B1', 'wordpress' ),
		'B1_render',
		'pluginPage',
		'inscal_pluginPage_section1'
	);

	add_settings_field(
		'B2',
		__( 'B2', 'wordpress' ),
		'B2_render',
		'pluginPage',
		'inscal_pluginPage_section1'
	);

	add_settings_field(
		'B3',
		__( 'B3', 'wordpress' ),
		'B3_render',
		'pluginPage',
		'inscal_pluginPage_section1'
	);

	add_settings_field(
		'B4',
		__( 'B4', 'wordpress' ),
		'B4_render',
		'pluginPage',
		'inscal_pluginPage_section1'
	);

	add_settings_field(
		'C1',
		__( 'C1', 'wordpress' ),
		'C1_render',
		'pluginPage',
		'inscal_pluginPage_section2'
	);

	add_settings_field(
		'C2',
		__( 'C2', 'wordpress' ),
		'C2_render',
		'pluginPage',
		'inscal_pluginPage_section2'
	);

	add_settings_field(
		'D1',
		__( 'D1', 'wordpress' ),
		'D1_render',
		'pluginPage',
		'inscal_pluginPage_section3'
	);

	add_settings_field(
		'D2',
		__( 'D2', 'wordpress' ),
		'D2_render',
		'pluginPage',
		'inscal_pluginPage_section3'
	);

	add_settings_field(
		'A1',
		__( 'A1', 'wordpress' ),
		'A1_render',
		'pluginPage',
		'inscal_pluginPage_section4'
	);
	add_settings_field(
		'A2',
		__( 'A2', 'wordpress' ),
		'A2_render',
		'pluginPage',
		'inscal_pluginPage_section4'
	);
	add_settings_field(
		'F',
		__( 'F', 'wordpress' ),
		'F_render',
		'pluginPage',
		'inscal_pluginPage_section5'
	);
	add_settings_field(
		'E',
		__( 'E', 'wordpress' ),
		'E_render',
		'pluginPage',
		'inscal_pluginPage_section5'
	);
	add_settings_field(
		'city0',
		__( 'Київ', 'wordpress' ),
		'city0_render',
		'pluginPage',
		'inscal_pluginPage_section6'
	);
	add_settings_field(
		'city1',
		__( 'Бориспіль, Боярка, Бровари, Васильків, Вишгород, Вишневе, Ірпінь', 'wordpress' ),
		'city1_render',
		'pluginPage',
		'inscal_pluginPage_section6'
	);
	add_settings_field(
		'city2',
		__( 'міста з населенням більше 1 млн. осіб: Харків, Одеса', 'wordpress' ),
		'city2_render',
		'pluginPage',
		'inscal_pluginPage_section6'
	);
	add_settings_field(
		'city3',
		__( 'міста з населенням від 500 тис. до 1 млн. осіб: Дніпро, Донецьк, Запоріжжя, Львів, Кивий Ріг', 'wordpress' ),
		'city3_render',
		'pluginPage',
		'inscal_pluginPage_section6'
	);
	add_settings_field(
		'city4',
		__( 'міста з населенням від 100 тис. до 500 тис. осіб: ', 'wordpress' ),
		'city4_render',
		'pluginPage',
		'inscal_pluginPage_section6'
	);
	add_settings_field(
		'city5',
		__( 'міста з населенням менше 100 тис. осіб ', 'wordpress' ),
		'city5_render',
		'pluginPage',
		'inscal_pluginPage_section6'
	);
	add_settings_field(
		'G1',
		__( 'ТЗ НЕ використовується в якості таксі', 'wordpress' ),
		'G1_render',
		'pluginPage',
		'inscal_pluginPage_section7'
	);
	add_settings_field(
		'G2',
		__( 'ТЗ використовується в якості таксі', 'wordpress' ),
		'G2_render',
		'pluginPage',
		'inscal_pluginPage_section7'
	);
	add_settings_field(
		'H0P',
		__( 'Водійський стаж ПЗУ (Бориспіль, Боярка, Бровари, Васильків, Вишгород, Вишневе, Ірпінь)', 'wordpress' ),
		'H0P_render',
		'pluginPage',
		'inscal_pluginPage_section8'
	);
	add_settings_field(
		'H1P',
		__( 'Водійський стаж ПЗУ (міста з населенням менше 100 тис. осіб)', 'wordpress' ),
		'H1P_render',
		'pluginPage',
		'inscal_pluginPage_section8'
	);
	add_settings_field(
		'H2P',
		__( 'Водійський стаж ПЗУ - інші міста', 'wordpress' ),
		'H2P_render',
		'pluginPage',
		'inscal_pluginPage_section8'
	);
	add_settings_field(
		'H0Us',
		__( 'Водійський стаж УСГ (Бориспіль, Боярка, Бровари, Васильків, Вишгород, Вишневе, Ірпінь)', 'wordpress' ),
		'H0Us_render',
		'pluginPage',
		'inscal_pluginPage_section8'
	);
	add_settings_field(
		'H1Us',
		__( 'Водійський стаж УСГ (міста з населенням менше 100 тис. осіб)', 'wordpress' ),
		'H1Us_render',
		'pluginPage',
		'inscal_pluginPage_section8'
	);
	add_settings_field(
		'H2Us',
		__( 'Водійський стаж УСГ - інші міста', 'wordpress' ),
		'H2Us_render',
		'pluginPage',
		'inscal_pluginPage_section8'
	);
	add_settings_field(
		'H0U',
		__( 'Водійський стаж Уніка (Бориспіль, Боярка, Бровари, Васильків, Вишгород, Вишневе, Ірпінь)', 'wordpress' ),
		'H0U_render',
		'pluginPage',
		'inscal_pluginPage_section8'
	);
	add_settings_field(
		'H1U',
		__( 'Водійський стаж Уніка (міста з населенням менше 100 тис. осіб)', 'wordpress' ),
		'H1U_render',
		'pluginPage',
		'inscal_pluginPage_section8'
	);
	add_settings_field(
		'H2U',
		__( 'Водійський стаж Уніка - інші міста', 'wordpress' ),
		'H2U_render',
		'pluginPage',
		'inscal_pluginPage_section8'
	);
	add_settings_field(
		'H1',
		__( 'Водійський стаж AXA(Бориспіль, Боярка, Бровари, Васильків, Вишгород, Вишневе, Ірпінь)', 'wordpress' ),
		'H1_render',
		'pluginPage',
		'inscal_pluginPage_section8'
	);
	add_settings_field(
		'H2',
		__( 'Водійський стаж AXA (міста з населенням менше 100 тис. осіб)', 'wordpress' ),
		'H2_render',
		'pluginPage',
		'inscal_pluginPage_section8'
	);
	add_settings_field(
		'H3',
		__( 'Водійський стаж AXA - інші міста', 'wordpress' ),
		'H3_render',
		'pluginPage',
		'inscal_pluginPage_section8'
	);
	add_settings_field(
		'I',
		__( 'Період дії полісу', 'wordpress' ),
		'I_render',
		'pluginPage',
		'inscal_pluginPage_section9'
	);
	add_settings_field(
		'J',
		__( 'Доведені спроби шахрайства', 'wordpress' ),
		'J_render',
		'pluginPage',
		'inscal_pluginPage_section10'
	);
	add_settings_field(
		'K1_1',
		__( 'чотири роки та раніше - Уніка', 'wordpress' ),
		'K1_1_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K1_2',
		__( 'чотири роки та раніше - ПЗУ', 'wordpress' ),
		'K1_2_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K1_3',
		__( 'чотири роки та раніше - АХА', 'wordpress' ),
		'K1_3_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K1_4',
		__( 'чотири роки та раніше - УСГ', 'wordpress' ),
		'K1_4_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K2_1',
		__( 'три роки - Уніка', 'wordpress' ),
		'K2_1_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K2_2',
		__( 'три роки - ПЗУ', 'wordpress' ),
		'K2_2_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K2_3',
		__( 'три роки - АХА', 'wordpress' ),
		'K2_3_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K2_4',
		__( 'три роки - УСГ', 'wordpress' ),
		'K2_4_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K3_1',
		__( 'два роки - Уніка', 'wordpress' ),
		'K3_1_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K3_2',
		__( 'два роки - ПЗУ', 'wordpress' ),
		'K3_2_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K3_3',
		__( 'два роки - АХА', 'wordpress' ),
		'K3_3_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K3_4',
		__( 'два роки - УСГ', 'wordpress' ),
		'K3_4_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K4_1',
		__( 'рік - Уніка', 'wordpress' ),
		'K4_1_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K4_2',
		__( 'рік - ПЗУ', 'wordpress' ),
		'K4_2_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K4_3',
		__( 'рік - АХА', 'wordpress' ),
		'K4_3_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K4_4',
		__( 'рік - УСГ', 'wordpress' ),
		'K4_4_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K5_1',
		__( 'до року - Уніка', 'wordpress' ),
		'K5_1_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K5_2',
		__( 'до року - ПЗУ', 'wordpress' ),
		'K5_2_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K5_3',
		__( 'до року - АХА', 'wordpress' ),
		'K5_3_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'K5_4',
		__( 'до року - УСГ', 'wordpress' ),
		'K5_4_render',
		'pluginPage',
		'inscal_pluginPage_section11'
	);
	add_settings_field(
		'L',
		__( 'Не маю пільги', 'wordpress' ),
		'L_render',
		'pluginPage',
		'inscal_pluginPage_section12'
	);
	add_settings_field(
		'M',
		__( 'Маю пільгу', 'wordpress' ),
		'M_render',
		'pluginPage',
		'inscal_pluginPage_section12'
	);
	add_settings_field(
		'BP',
		__( 'Базовий платіж', 'wordpress' ),
		'BP_render',
		'pluginPage',
		'inscal_pluginPage_section13'
	);




	add_settings_field(
		'DCVpzu1',
		__( 'DCV pzu 100 000', 'wordpress' ),
		'DCVpzu1_render',
		'pluginPage',
		'inscal_pluginPage_section17'
	);

	add_settings_field(
		'DCVpzu2',
		__( 'DCV pzu 200 000', 'wordpress' ),
		'DCVpzu2_render',
		'pluginPage',
		'inscal_pluginPage_section17'
	);

	add_settings_field(
		'DCVpzu5',
		__( 'DCV pzu 500 000', 'wordpress' ),
		'DCVpzu5_render',
		'pluginPage',
		'inscal_pluginPage_section17'
	);


	add_settings_field(
		'DCVpzu1c2',
		__( 'DCV pzu 100 000 city 2', 'wordpress' ),
		'DCVpzu1c2_render',
		'pluginPage',
		'inscal_pluginPage_section17'
	);

	add_settings_field(
		'DCVpzu2c2',
		__( 'DCV pzu 200 000 city 2', 'wordpress' ),
		'DCVpzu2c2_render',
		'pluginPage',
		'inscal_pluginPage_section17'
	);

	add_settings_field(
		'DCVpzu5c2',
		__( 'DCV pzu 500 000 city 2', 'wordpress' ),
		'DCVpzu5c2_render',
		'pluginPage',
		'inscal_pluginPage_section17'
	);











	add_settings_field(
		'DCVa1',
		__( 'DCV axa 100 000 citi 1', 'wordpress' ),
		'DCVa1_render',
		'pluginPage',
		'inscal_pluginPage_section14'
	);

	add_settings_field(
		'DCVa2',
		__( 'DCV axa 200 000 citi 1', 'wordpress' ),
		'DCVa2_render',
		'pluginPage',
		'inscal_pluginPage_section14'
	);

	add_settings_field(
		'DCVa5',
		__( 'DCV axa 500 000 citi 1', 'wordpress' ),
		'DCVa5_render',
		'pluginPage',
		'inscal_pluginPage_section14'
	);

	add_settings_field(
		'DCVa1c2',
		__( 'DCV axa 100 000 citi 2', 'wordpress' ),
		'DCVa1c2_render',
		'pluginPage',
		'inscal_pluginPage_section14'
	);

	add_settings_field(
		'DCVa2c2',
		__( 'DCV axa 200 000 citi 2', 'wordpress' ),
		'DCVa2c2_render',
		'pluginPage',
		'inscal_pluginPage_section14'
	);

	add_settings_field(
		'DCVa5c2',
		__( 'DCV axa 500 000 citi 2', 'wordpress' ),
		'DCVa5c2_render',
		'pluginPage',
		'inscal_pluginPage_section14'
	);

//unica

	add_settings_field(
		'DCVu1',
		__( 'DCV Uniqa  100 000 citi 1', 'wordpress' ),
		'DCVu1_render',
		'pluginPage',
		'inscal_pluginPage_section15'
	);

	add_settings_field(
		'DCVu2',
		__( 'DCV Uniqa  200 000 citi 1', 'wordpress' ),
		'DCVu2_render',
		'pluginPage',
		'inscal_pluginPage_section15'
	);

	add_settings_field(
		'DCVu5',
		__( 'DCV Uniqa  500 000 citi 1', 'wordpress' ),
		'DCVu5_render',
		'pluginPage',
		'inscal_pluginPage_section15'
	);


	add_settings_field(
		'DCVu1c2',
		__( 'DCV Uniqa  100 000 citi 2', 'wordpress' ),
		'DCVu1c2_render',
		'pluginPage',
		'inscal_pluginPage_section15'
	);

	add_settings_field(
		'DCVu2c2',
		__( 'DCV Uniqa  200 000 citi 2', 'wordpress' ),
		'DCVu2c2_render',
		'pluginPage',
		'inscal_pluginPage_section15'
	);

	add_settings_field(
		'DCVu5c2',
		__( 'DCV Uniqa  500 000 citi 2', 'wordpress' ),
		'DCVu5c2_render',
		'pluginPage',
		'inscal_pluginPage_section15'
	);



	add_settings_field(
		'DCVu1c3',
		__( 'DCV Uniqa  100 000 citi 3', 'wordpress' ),
		'DCVu1c3_render',
		'pluginPage',
		'inscal_pluginPage_section15'
	);

	add_settings_field(
		'DCVu2c3',
		__( 'DCV Uniqa  200 000 citi 3', 'wordpress' ),
		'DCVu2c3_render',
		'pluginPage',
		'inscal_pluginPage_section15'
	);

	add_settings_field(
		'DCVu5c3',
		__( 'DCV Uniqa  500 000 citi 3', 'wordpress' ),
		'DCVu5c3_render',
		'pluginPage',
		'inscal_pluginPage_section15'
	);

//usg

	add_settings_field(
		'DCVusg1',
		__( 'DCV Усг 100 000', 'wordpress' ),
		'DCVusg1_render',
		'pluginPage',
		'inscal_pluginPage_section16'
	);

	add_settings_field(
		'DCVusg2',
		__( 'DCV Усг 200 000', 'wordpress' ),
		'DCVusg2_render',
		'pluginPage',
		'inscal_pluginPage_section16'
	);

	add_settings_field(
		'DCVusg5',
		__( 'DCV Усг 500 000', 'wordpress' ),
		'DCVusg5_render',
		'pluginPage',
		'inscal_pluginPage_section16'
	);

}


function B1_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[B1]' value='<?php echo $options['B1']; ?>'>
	<?php

}


function B2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[B2]' value='<?php echo $options['B2']; ?>'>
	<?php

}


function B3_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[B3]' value='<?php echo $options['B3']; ?>'>
	<?php

}


function B4_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[B4]' value='<?php echo $options['B4']; ?>'>
	<?php

}


function C1_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[C1]' value='<?php echo $options['C1']; ?>'>
	<?php

}


function C2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[C2]' value='<?php echo $options['C2']; ?>'>
	<?php

}


function D1_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[D1]' value='<?php echo $options['D1']; ?>'>
	<?php

}


function D2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[D2]' value='<?php echo $options['D2']; ?>'>
	<?php

}


function A1_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[A1]' value='<?php echo $options['A1']; ?>'>
	<?php

}
function A2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[A2]' value='<?php echo $options['A2']; ?>'>
	<?php

}
function F_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[F]' value='<?php echo $options['F']; ?>'>
	<?php

}
function E_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[E]' value='<?php echo $options['E']; ?>'>
	<?php

}

function city0_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[city0]' value='<?php echo $options['city0']; ?>'>
	<?php

}
function city1_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[city1]' value='<?php echo $options['city1']; ?>'>
	<?php

}
function city2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[city2]' value='<?php echo $options['city2']; ?>'>
	<?php

}
function city3_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[city3]' value='<?php echo $options['city3']; ?>'>
	<?php

}
function city4_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[city4]' value='<?php echo $options['city4']; ?>'>
	<?php

}
function city5_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[city5]' value='<?php echo $options['city5']; ?>'>
	<?php

}
function G1_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[G1]' value='<?php echo $options['G1']; ?>'>
	<?php

}
function G2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[G2]' value='<?php echo $options['G2']; ?>'>
	<?php

}
function H0Us_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[H0Us]' value='<?php echo $options['H0Us']; ?>'>
	<?php

}
function H1Us_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[H1Us]' value='<?php echo $options['H1Us']; ?>'>
	<?php

}
function H2Us_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[H2Us]' value='<?php echo $options['H2Us']; ?>'>
	<?php

}
function H0P_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[H0P]' value='<?php echo $options['H0P']; ?>'>
	<?php

}
function H1P_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[H1P]' value='<?php echo $options['H1P']; ?>'>
	<?php

}
function H2P_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[H2P]' value='<?php echo $options['H2P']; ?>'>
	<?php

}
function H0U_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[H0U]' value='<?php echo $options['H0U']; ?>'>
	<?php

}
function H1U_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[H1U]' value='<?php echo $options['H1U']; ?>'>
	<?php

}
function H2U_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[H2U]' value='<?php echo $options['H2U']; ?>'>
	<?php

}
function H1_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[H1]' value='<?php echo $options['H1']; ?>'>
	<?php

}
function H2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[H2]' value='<?php echo $options['H2']; ?>'>
	<?php

}
function H3_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[H3]' value='<?php echo $options['H3']; ?>'>
	<?php

}
function I_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[I]' value='<?php echo $options['I']; ?>'>
	<?php

}
function J_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[J]' value='<?php echo $options['J']; ?>'>
	<?php

}
function K1_1_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K1_1]' value='<?php echo $options['K1_1']; ?>'>
	<?php

}
function K1_2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K1_2]' value='<?php echo $options['K1_2']; ?>'>
	<?php

}
function K1_3_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K1_3]' value='<?php echo $options['K1_3']; ?>'>
	<?php

}
function K1_4_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K1_4]' value='<?php echo $options['K1_4']; ?>'>
	<?php

}
function K2_1_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K2_1]' value='<?php echo $options['K2_1']; ?>'>
	<?php

}
function K2_2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K2_2]' value='<?php echo $options['K2_2']; ?>'>
	<?php

}
function K2_3_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K2_3]' value='<?php echo $options['K2_3']; ?>'>
	<?php

}
function K2_4_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K2_4]' value='<?php echo $options['K2_4']; ?>'>
	<?php

}

function K3_1_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K3_1]' value='<?php echo $options['K3_1']; ?>'>
	<?php

}
function K3_2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K3_2]' value='<?php echo $options['K3_2']; ?>'>
	<?php

}
function K3_3_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K3_3]' value='<?php echo $options['K3_3']; ?>'>
	<?php

}
function K3_4_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K3_4]' value='<?php echo $options['K3_4']; ?>'>
	<?php

}
function K4_1_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K4_1]' value='<?php echo $options['K4_1']; ?>'>
	<?php

}
function K4_2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K4_2]' value='<?php echo $options['K4_2']; ?>'>
	<?php

}
function K4_3_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K4_3]' value='<?php echo $options['K4_3']; ?>'>
	<?php

}
function K4_4_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K4_4]' value='<?php echo $options['K4_4']; ?>'>
	<?php

}
function K5_1_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K5_1]' value='<?php echo $options['K5_1']; ?>'>
	<?php

}
function K5_2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K5_2]' value='<?php echo $options['K5_2']; ?>'>
	<?php

}
function K5_3_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K5_3]' value='<?php echo $options['K5_3']; ?>'>
	<?php

}
function K5_4_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[K5_4]' value='<?php echo $options['K5_4']; ?>'>
	<?php

}
function L_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[L]' value='<?php echo $options['L']; ?>'>
	<?php

}
function M_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[M]' value='<?php echo $options['M']; ?>'>
	<?php

}
function BP_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[BP]' value='<?php echo $options['BP']; ?>'>
	<?php

}
function DCVpzu1_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVpzu1]' value='<?php echo $options['DCVpzu1']; ?>'>
	<?php

}

function DCVpzu2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVpzu2]' value='<?php echo $options['DCVpzu2']; ?>'>
	<?php

}

function DCVpzu5_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVpzu5]' value='<?php echo $options['DCVpzu5']; ?>'>
	<?php

}




function DCVpzu1c2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVpzu1c2]' value='<?php echo $options['DCVpzu1c2']; ?>'>
	<?php

}

function DCVpzu2c2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVpzu2c2]' value='<?php echo $options['DCVpzu2c2']; ?>'>
	<?php

}

function DCVpzu5c2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVpzu5c2]' value='<?php echo $options['DCVpzu5c2']; ?>'>
	<?php

}





function DCVusg1_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVusg1]' value='<?php echo $options['DCVusg1']; ?>'>
	<?php

}

function DCVusg2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVusg2]' value='<?php echo $options['DCVusg2']; ?>'>
	<?php

}

function DCVusg5_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVusg5]' value='<?php echo $options['DCVusg5']; ?>'>
	<?php

}




function DCVa1_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVa1]' value='<?php echo $options['DCVa1']; ?>'>
	<?php

}

function DCVa2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVa2]' value='<?php echo $options['DCVa2']; ?>'>
	<?php

}

function DCVa5_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVa5]' value='<?php echo $options['DCVa5']; ?>'>
	<?php

}



function DCVa1c2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVa1c2]' value='<?php echo $options['DCVa1c2']; ?>'>
	<?php

}

function DCVa2c2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVa2c2]' value='<?php echo $options['DCVa2c2']; ?>'>
	<?php

}

function DCVa5c2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVa5c2]' value='<?php echo $options['DCVa5c2']; ?>'>
	<?php

}



//Uniqa

function DCVu1_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVu1]' value='<?php echo $options['DCVu1']; ?>'>
	<?php

}

function DCVu2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVu2]' value='<?php echo $options['DCVu2']; ?>'>
	<?php

}

function DCVu5_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVu5]' value='<?php echo $options['DCVu5']; ?>'>
	<?php

}

function DCVu1c2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVu1c2]' value='<?php echo $options['DCVu1c2']; ?>'>
	<?php

}

function DCVu2c2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVu2c2]' value='<?php echo $options['DCVu2c2']; ?>'>
	<?php

}

function DCVu5c2_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVu5c2]' value='<?php echo $options['DCVu5c2']; ?>'>
	<?php

}


function DCVu1c3_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVu1c3]' value='<?php echo $options['DCVu1c3']; ?>'>
	<?php

}

function DCVu2c3_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVu2c3]' value='<?php echo $options['DCVu2c3']; ?>'>
	<?php

}

function DCVu5c3_render(  ) {

	$options = get_option( 'inscal_settings' );
	?>
	<input type='text' name='inscal_settings[DCVu5c3]' value='<?php echo $options['DCVu5c3']; ?>'>
	<?php

}

function inscal_settings_section_callback1(  ) {

	echo __( 'Об’єм двигуна ', 'wordpress' );

}
function inscal_settings_section_callback2(  ) {

	echo __( 'Вантажопідйомність', 'wordpress' );

}

function inscal_settings_section_callback3(  ) {

	echo __( 'Кількість місць для сидіння', 'wordpress' );

}

function inscal_settings_section_callback4(  ) {

	echo __( 'Об’єм двигуна', 'wordpress' );

}
function inscal_settings_section_callback5(  ) {

	echo __( 'Призначення', 'wordpress' );

}
function inscal_settings_section_callback6(  ) {

	echo __( 'Коефіціенти міст України', 'wordpress' );

}

function inscal_settings_section_callback7(  ) {

	echo __( 'Використання в якості таксі', 'wordpress' );

}
function inscal_settings_section_callback8(  ) {

	echo __( 'Водійський стаж', 'wordpress' );

}
function inscal_settings_section_callback9(  ) {

	echo __( 'Період дії полісу', 'wordpress' );

}
function inscal_settings_section_callback10(  ) {

	echo __( 'Доведені спроби шахрайства', 'wordpress' );

}
function inscal_settings_section_callback11(  ) {

	echo __( 'Кб/м', 'wordpress' );

}
function inscal_settings_section_callback12(  ) {

	echo __( 'Кпільга', 'wordpress' );

}
function inscal_settings_section_callback13(  ) {

	echo __( 'Базовий платіж', 'wordpress' );

}
function inscal_settings_section_callback14(  ) {

	echo __( 'ДЦВ', 'wordpress' );

}

function inscal_settings_section_callback15(  ) {

	echo __( 'ДЦВ', 'wordpress' );

}
function inscal_settings_section_callback16(  ) {

	echo __( 'ДЦВ', 'wordpress' );

}
function inscal_settings_section_callback17(  ) {

	echo __( 'ДЦВ', 'wordpress' );

}


function inscal_options_page(  ) {

	?>
	<form action='options.php' method='post'>

		<h2>Калькулятор ОСАГО</h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php

}

?>
<?php
$a = get_option('inscal_settings');

$b =  wp_json_encode($a);

// encode array to json
$json = json_encode(array('data' => $a));
$fp = fopen('data.json', 'w');
fwrite($fp, $json);
fclose($fp);

?>