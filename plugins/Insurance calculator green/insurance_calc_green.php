<?php
/*
 * Plugin Name: Insurance Calc Green
 * Description: настройки для калькулятора зеленая карта
*/
?>
<?php
add_action( 'admin_menu', 'inscal_green_add_admin_menu' );
add_action( 'admin_init', 'inscal_green_settings_init' );


function inscal_green_add_admin_menu(  ) {

	add_menu_page( 'insurance_calculator_green', 'Калькулятор зелена карта', 'manage_options', 'insurance_calculator_green', 'inscal_green_options_page' );

}


function inscal_green_settings_init(  ) {

	register_setting( 'pluginPage2', 'inscal_green_settings' );

	add_settings_section(
		'inscal_green_pluginPage2_section1',
		__( 'Країни Європи', 'wordpress' ),
		'inscal_green_settings_section_callback1',
		'pluginPage2'
	);
	add_settings_section(
		'inscal_green_pluginPage2_section2',
		__( 'Країни СНГ', 'wordpress' ),
		'inscal_green_settings_section_callback2',
		'pluginPage2'
	);
	add_settings_field(
		'car_field_sng',
		__( '', 'wordpress' ),
		'car_field_sng_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section2'
	);
	add_settings_field(
		'trailer_field_sng',
		__( '', 'wordpress' ),
		'trailer_field_sng_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section2'
	);
	add_settings_field(
		'bike_field_sng',
		__( '', 'wordpress' ),
		'bike_field_sng_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section2'
	);
	add_settings_field(
		'car_field',
		__( '', 'wordpress' ),
		'car_field_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section1'
	);
	add_settings_field(
		'trailer_field',
		__( '', 'wordpress' ),
		'trailer_field_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section1'
	);
	add_settings_field(
		'bike_field',
		__( '', 'wordpress' ),
		'bike_field_render',
		'pluginPage2',
		'inscal_green_pluginPage2_section1'
	);
}

function car_field_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
	<style media="screen">
		.green-table-container {
			overflow-x: auto;
			text-align: center;
			width: 100%;
		}

		.green-table {
			width: 100%;
		}

		.form-table>tbody>tr>th{
			padding: 0;
			width: 0;
		}

		.green-table input {
			width: 50px;
		}
	</style>
	<div class="green-table-container">
		<table class="green-table">
			<thead>
				<tr>
					<td>ТЗ/Дні</td>
					<td>15 дн.</td>
					<td>1 міс.</td>
					<td>2 міс.</td>
					<td>3 міс.</td>
					<td>4 міс.</td>
					<td>5 міс.</td>
					<td>6 міс.</td>
					<td>7 міс.</td>
					<td>8 міс.</td>
					<td>9 міс.</td>
					<td>10 міс.</td>
					<td>11 міс.</td>
					<td>12 міс.</td>
				</tr>
			</thead>
		<tbody>
			<tr>
				<td>Легкові автомобілі</td>
				<td><input type='text' name='inscal_green_settings[15_d_c]' value='<?php echo $options['15_d_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[1_m_c]' value='<?php echo $options['1_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[2_m_c]' value='<?php echo $options['2_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[3_m_c]' value='<?php echo $options['3_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[4_m_c]' value='<?php echo $options['4_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[5_m_c]' value='<?php echo $options['5_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[6_m_c]' value='<?php echo $options['6_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[7_m_c]' value='<?php echo $options['7_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[8_m_c]' value='<?php echo $options['8_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[9_m_c]' value='<?php echo $options['9_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[10_m_c]' value='<?php echo $options['10_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[11_m_c]' value='<?php echo $options['11_m_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[12_m_c]' value='<?php echo $options['12_m_c']; ?>'></td>
			</tr>
	<?php

}

function trailer_field_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
			<tr>
				<td>Причепи</td>
				<td><input type='text' name='inscal_green_settings[15_d_t]' value='<?php echo $options['15_d_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[1_m_t]' value='<?php echo $options['1_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[2_m_t]' value='<?php echo $options['2_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[3_m_t]' value='<?php echo $options['3_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[4_m_t]' value='<?php echo $options['4_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[5_m_t]' value='<?php echo $options['5_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[6_m_t]' value='<?php echo $options['6_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[7_m_t]' value='<?php echo $options['7_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[8_m_t]' value='<?php echo $options['8_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[9_m_t]' value='<?php echo $options['9_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[10_m_t]' value='<?php echo $options['10_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[11_m_t]' value='<?php echo $options['11_m_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[12_m_t]' value='<?php echo $options['12_m_t']; ?>'></td>
			</tr>
	<?php

}

function bike_field_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
			<tr>
				<td>Мотоцикли</td>
				<td><input type='text' name='inscal_green_settings[15_d_b]' value='<?php echo $options['15_d_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[1_m_b]' value='<?php echo $options['1_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[2_m_b]' value='<?php echo $options['2_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[3_m_b]' value='<?php echo $options['3_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[4_m_b]' value='<?php echo $options['4_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[5_m_b]' value='<?php echo $options['5_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[6_m_b]' value='<?php echo $options['6_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[7_m_b]' value='<?php echo $options['7_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[8_m_b]' value='<?php echo $options['8_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[9_m_b]' value='<?php echo $options['9_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[10_m_b]' value='<?php echo $options['10_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[11_m_b]' value='<?php echo $options['11_m_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[12_m_b]' value='<?php echo $options['12_m_b']; ?>'></td>
			</tr>
		</tbody>
		</table>
	</div>
	<?php

}

function car_field_sng_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
	<div class="green-table-container">
		<table class="green-table">
			<thead>
				<tr>
					<td>ТЗ/Дні</td>
					<td>15 дн.</td>
					<td>1 міс.</td>
					<td>2 міс.</td>
					<td>3 міс.</td>
					<td>4 міс.</td>
					<td>5 міс.</td>
					<td>6 міс.</td>
					<td>7 міс.</td>
					<td>8 міс.</td>
					<td>9 міс.</td>
					<td>10 міс.</td>
					<td>11 міс.</td>
					<td>12 міс.</td>
				</tr>
			</thead>
		<tbody>
			<tr>
				<td>Легкові автомобілі</td>
				<td><input type='text' name='inscal_green_settings[15_d_sng_c]' value='<?php echo $options['15_d_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[1_m_sng_c]' value='<?php echo $options['1_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[2_m_sng_c]' value='<?php echo $options['2_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[3_m_sng_c]' value='<?php echo $options['3_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[4_m_sng_c]' value='<?php echo $options['4_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[5_m_sng_c]' value='<?php echo $options['5_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[6_m_sng_c]' value='<?php echo $options['6_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[7_m_sng_c]' value='<?php echo $options['7_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[8_m_sng_c]' value='<?php echo $options['8_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[9_m_sng_c]' value='<?php echo $options['9_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[10_m_sng_c]' value='<?php echo $options['10_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[11_m_sng_c]' value='<?php echo $options['11_m_sng_c']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[12_m_sng_c]' value='<?php echo $options['12_m_sng_c']; ?>'></td>
			</tr>
	<?php

}

function trailer_field_sng_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
			<tr>
				<td>Причепи</td>
				<td><input type='text' name='inscal_green_settings[15_d_sng_t]' value='<?php echo $options['15_d_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[1_m_sng_t]' value='<?php echo $options['1_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[2_m_sng_t]' value='<?php echo $options['2_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[3_m_sng_t]' value='<?php echo $options['3_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[4_m_sng_t]' value='<?php echo $options['4_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[5_m_sng_t]' value='<?php echo $options['5_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[6_m_sng_t]' value='<?php echo $options['6_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[7_m_sng_t]' value='<?php echo $options['7_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[8_m_sng_t]' value='<?php echo $options['8_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[9_m_sng_t]' value='<?php echo $options['9_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[10_m_sng_t]' value='<?php echo $options['10_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[11_m_sng_t]' value='<?php echo $options['11_m_sng_t']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[12_m_sng_t]' value='<?php echo $options['12_m_sng_t']; ?>'></td>
			</tr>
	<?php

}

function bike_field_sng_render(  ) {

	$options = get_option( 'inscal_green_settings' );
	?>
			<tr>
				<td>Мотоцикли</td>
				<td><input type='text' name='inscal_green_settings[15_d_sng_b]' value='<?php echo $options['15_d_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[1_m_sng_b]' value='<?php echo $options['1_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[2_m_sng_b]' value='<?php echo $options['2_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[3_m_sng_b]' value='<?php echo $options['3_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[4_m_sng_b]' value='<?php echo $options['4_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[5_m_sng_b]' value='<?php echo $options['5_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[6_m_sng_b]' value='<?php echo $options['6_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[7_m_sng_b]' value='<?php echo $options['7_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[8_m_sng_b]' value='<?php echo $options['8_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[9_m_sng_b]' value='<?php echo $options['9_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[10_m_sng_b]' value='<?php echo $options['10_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[11_m_sng_b]' value='<?php echo $options['11_m_sng_b']; ?>'></td>
				<td><input type='text' name='inscal_green_settings[12_m_sng_b]' value='<?php echo $options['12_m_sng_b']; ?>'></td>
			</tr>
		</tbody>
		</table>
	</div>
	<?php

}

function inscal_green_settings_section_callback1(  ) {

	// echo __( '', 'wordpress' );
}

function inscal_green_settings_section_callback2(  ) {

	// echo __( '', 'wordpress' );
}

function inscal_green_options_page(  ) {

	?>
	<form action='options.php' method='post'>

		<h2>Калькулятор Зелена Карта</h2>

		<?php
		settings_fields( 'pluginPage2' );
		do_settings_sections( 'pluginPage2' );
		submit_button();
		?>

	</form>
	<?php

}

?>
<?php
$a = get_option('inscal_green_settings');

$b =  wp_json_encode($a);

// encode array to json
$json = json_encode(array('dataGreen' => $a));
$fp = fopen('dataGreen.json', 'w');
fwrite($fp, $json);
fclose($fp);

?>
