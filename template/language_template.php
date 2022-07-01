<div id="shl-header">
	<div id='shl-header-menu-main' class="shl-header-menu-container">
		<div class="shl-header-menu-row">
			<div class="shl-header-menu-title">
				<h2>Ready to learn?</h2>
				<p>Pick a language to get started!</p>
			</div>
			<div class="shl-header-menu-flags">
				<?php
				$current_page = $_SERVER['HTTP_HOST'];

				foreach (SHL_Language_settings::$langs as $tab_id => $tab_heading) {
					if($tab_heading['name'] != 'More'){

						?>

						<div class="shl-header-menu-circular">
							<div class="flag-img">
								<a href="<?PHP echo '?lang='. $tab_heading['icon']; ?>">
									<img src="<?PHP echo SHL_URL . 'assets/lang_flags/'. $tab_heading['icon'] . '.svg'; ?>">

								</div>
								<p><?php echo esc_attr($tab_heading['name']); ?></p>
							</div>		

							<?php
						}else{
							?>
							<div class="shl-header-menu-circular">
								<div class="flag-img">
									<img src="<?PHP echo SHL_URL . 'assets/lang_flags/'. $tab_heading['icon'] . '.png'; ?>">
								</div>
								<p><?php echo esc_attr($tab_heading['name']); ?></p>
							</div>
							<?php

						}

					}		
					?>
				</div>
			</div>
		</div>	
	</div>


