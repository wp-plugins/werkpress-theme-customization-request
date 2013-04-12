<?php 

$remove_defaults_widgets = array(
    'dashboard_incoming_links' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    ),
    'dashboard_right_now' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    ),
    'dashboard_recent_drafts' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_quick_press' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_plugins' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    ),
    'dashboard_primary' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_secondary' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_recent_comments' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    )
);

$custom_dashboard_widgets = array(
    'werkpress-dashboard-widget' => array(
        'title' => 'WerkPress Customization Request',
        'callback' => 'werkpressDashboardWidgetContent'
    )
);

function werkpressDashboardWidgetContent() {
    ?>
	<h1 class="alignleft">
		<?php
			echo '<img src="' . plugins_url( 'assets/logo.png' , __FILE__ ) . '" alt="Werkpress"> ';
		?>
	</h1>
    
    <h2 class="alignright"><a href="http://werkpress.com" title="Werkpress.com" target="_blank">werkpress.com</a></h2>
	<form id="ww_form">
		<ul>
			<li>
				<label for="name">Your name</label><span class="req"></span><br/>
				<input class="required" type="text" name="name" id="ww_name">
			</li>
			<li class="right">	
				<label for="company">Company name</label><span class="req"></span><br/>
				<input type="text" name="company"  id="ww_company">
			</li>	
			<li>
				<label for="email">Email</label><span class="req"></span><br/>
				<input class="required" type="email" name="email" id="ww_email">
			</li>	
			<li class="right">		
				<label for="website">Your site</label><span class="req"></span><br/>
				<input class="required" type="text" name="website" id="ww_website">
			</li>
			<li>	
				<label for="theme">What theme do you want modified?</label><span class="req"></span><br/>
				<input class="required" type="text" name="theme" id="ww_theme">
			</li>
			<li class="right">		
				<label for="hosting">Your hosting provider</label><span class="req"></span><br/>
				<input type="text" name="hosting" id="ww_hosting">
			</li>

			<li id="ww_textarea">	
				<label for="changes">Describe desired changes</label><span class="req"></span><br/>
				<textarea class="required" name="changes" id="ww_changes"></textarea>
			</li>	
			<li>
				<label for="budget">What is your project budget?</label><span class="req"></span><br/>
				<select class="required" name="budget" id="ww_budget">
					<option value="">Select a budget</option>
					<option value="Less than $500">&#60; $500</option>
					<option value="Between $500 and $1000">$500 - 1000</option>
					<option value="Between $1000 and $2000">$1000 - 2000</option>
					<option value="Between $2000 and $5000">$2000 - 5000</option>
					<option value="Between $5000 and $10000">$5000 - 10000</option>
					<option value="Greater than $10000">&#62; $10000</option>
				</select>
			</li>
            
            <li class="right"><h2><span class="req">* </span> Required field</h2></li>
			<li id="ww_submit">	
				<input type="submit" value="Request Customization" id="ww_submit_button">
			</li>
		<ul>
		
		
	</form>
    
	<?php
}