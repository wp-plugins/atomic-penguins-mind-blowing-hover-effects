<?php ?>
<div class="mainBox">

	<!-- Left Box -->
	<div class="leftBox">
		<div class="adminMenu">
		<p class="headerText" style="float: left; margin-top: 0px;" class="show_history"><button class="show_history" style="height: 30px;">PROJECTS</button></p>
			<p align="center" class="headerText">Menu</p>
		</div>
		<div style="margin-top: 22px;padding: 10px">
			<input placeholder="Name" type="text" name="save_name" class="save_name style_name" style="width: 150px">
			<button class="admin_button btn" id="saveNow" style="width: 85px">Save</button>
			<button class="admin_button btn" id="newProject" style="width: 85px">Reset</button>
			<button class="admin_button btn" id="overwrite" style="display: none;width: 110px">Overwrite</button>
			<button class="admin_button btn" id="cancel_this" style="display: none;width: 85px">Cancel</button>

		</div>

		<div class="the_box">
			<div class="mind-blown-holder">
				<div class="previewMain square_preview">
					<div class="previewMain_text_div">
						<p style="text-align:center;color:black;" class="previewMain_text">Main Box Content</p>
					</div>
					<div style="top: 205px;" class="hoverMain square_hover" entrance="1">
						<a href="#" class="title_link" style="color: white;"><h1 style="text-align:center;color:white" id="thehover_title">HOVER TITLE</h1></a>
						<hr class="divider-display" style="margin: 0px; width:100% ">
						<p style="text-align:center;color:white" id="thehover_content">Hover Box Content</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Of Left Box -->
	<!-- Right Box -->

	<div class="rightBox">
		<div class="mainBoxdiv">
			<p align="center" class="headerText">Main Box</p>
		</div>

		<div class="borderRadius">
			<p>Border Radius</p>
			<div class="top" style="float: left"> 
				<div class="input-holder">Top-Left<br/><input class="radius top top-left" type="text" size="4" id="top-left" maxlength="3"><span class="px-holder">px</span> </div>
				<div class="input-holder">Bottom-Left<br/><input class="radius top" type="text" size="4" id="bottom-left"  maxlength="3"><span class="px-holder">px</span> </div>
			</div>
			<div class="bottom" style="float: left"> 
				<div class="input-holder">Top-Right<br/> <input class="radius bottom" type="text" size="4" id="top-right"  maxlength="3"><span class="px-holder">px</span> </div>
				<div class="input-holder">Bottom-Right<br/> <input class="radius bottom" type="text" size="4" id="bottom-right"  maxlength="3"><span class="px-holder">px</span> </div>
			</div>
		</div>
		<div class="margins">
			<p>Margins</p>
				<div class="top" style="float:left">
					<div class="input-holder">Top<br /><input type="text" size="1" class="previewtext-margin-top"  maxlength="3"><span class="px-holder">px</span></div>
					<div class="input-holder">Right<br /><input type="text" size="1" class="previewtext-margin-right"  maxlength="3"><span class="px-holder">px</span></div>
					
				</div>
				<div class="bottom" style="float:left">
					<div class="input-holder">Bottom<br /><input type="text" size="1" class="previewtext-margin-bottom"  maxlength="3"><span class="px-holder">px</span></div>
					<div class="input-holder">Left<br /><input type="text" size="1" class="previewtext-margin-left"  maxlength="3"><span class="px-holder">px</span></div>
				</div>
		</div>
		<div class="pxs" style="padding: 10px; float:left;">
			<div class="the-pxs1"><p>Border</p><input type="text" size="1" id="border_main"  maxlength="3"><span class="px-holder">px</span></div>
			<div class="the-pxs the-2"><p>Width</p><input type="text" size="1" id="width_main"  maxlength="3"><span class="px-holder">px</span></div>
			<div class="the-pxs the-3"><p>Height</p><input type="text" size="1" id="height_main"  maxlength="3"><span class="px-holder">px</span></div>
			<div class="the-pxs the-4"><p>Font Size</p><input type="text" size="1" class="previewtext-font"  maxlength="3"><span class="px-holder">px</span></div>
			<div class="the-pxs the-5"><p>Spacing</p><input type="text" size="1" class="previewtext-spacing"  maxlength="3"><span class="px-holder">px</span></div>
		</div>
		<div class="colors">
			<p>Colors</p>
			<div>
				<div class="colorDiv" style="margin-top: 23px">
					<input type="color" class="color background-color">
					Background
				</div>
				<div class="colorDiv"> 
					<input type="color" class="color border-color">
					Border
				</div>
				<div class="colorDiv"> 
					<input type="color" class="color font-color">
					Font Color
				</div>
			</div>
			<div style="margin-top: 5px">
			</div>
		</div>
		<div style="padding: 12px; float: left; width: 40%">
			<div class="image_upload" style="margin-top: 9%;">
				<label for="upload_image" style="margin-top: 20px;">
                   <input id="upload_image" type="text" size="36" class="hidden" name="ad_image" value="http://" />
                   <input id="upload_image_button" class="btn" type="button" value="Background Image" style="width: 150px;font-size: 12px;min-height: 36px;margin-left: 0px" />
                   <input type="button" id="remove_bg_image" value="Remove" class="btn" style="width: 150px;font-size: 12px;min-height: 36px;margin-left: 0px">
                  <br />
                </label>
			</div>
		</div>
		<div style="padding: 10px">
			<textarea style="padding: 10px;width: 100%; height: 130px;" id="the_text" placeholder="Main Box Content"></textarea>
		</div>
	</div>
	<div class="litBox">
		<div class="litBoxDiv">
			<p class="headerText" align="center">HOVER BOX</p>
		</div>
		<div style="padding: 10px">
			TITLE: <input type="text" style="width: 70%;margin-bottom: 5px" id="hover_title" placeholder="Hover Title Here"><br />
			LINK : <input type="text" style="width: 70%;margin-bottom: 5px" id="hover_title_link" placeholder="Hover Title Link Here"><br />
			Color: <input type="color" class="color" id="title_color">
			Font Size: <input type="text" class="title_font_size" id="title_font_size" maxlength="3">
		</div>
		<div style="padding: 10px; float: left" id="radio-holder">
			<p>AlIGN</p>
			Left <input type="radio" name="align" value="left">
			Center <input type="radio" name="align" value="center">
			Right <input type="radio" name="align" value="right">
		</div>
		<div style=" padding: 10px;float: left">
			<p>DIVIDER</p>
			<input type="checkbox" class="divider-check" checked="checked">
		</div>
		<div style="float: left;padding: 10px">
			<p>EFFECT</p>
			<select class="hEffect" id="HovEffect">
				<optgroup label="Other">
					<option in="slide" value="1">Slide</option>
					<option in="lightSpeedIn" out="lightSpeedOut">Light Speed</option>
					<option in="rollIn" out="rollOut">Roll</option>
					<option in="wobble" out="fadeOut">Wobble</option>
					<option in="tada" out="fadeOut">Tadaa!</option>
					<option in="swing" out="fadeOut">Swing</option>
					<option in="shake" out="fadeOut">Shake</option>
					<option in="rubberBand" out="fadeOut">Rubberband</option>
					<option in="pulse" out="fadeOut">Pulse</option>
					<option in="flash" out="fadeOut">Flash</option>
				</optgroup>
				<optgroup label="Fade">
					<option in="fadeIn" out="fadeOut">FadeIn</option>
					<option in="fadeInUp" out="fadeOutUp">FadeUp</option>
					<option in="fadeInDown" out="fadeOutDown">FadeDown</option>
					<option in="fadeInRight" out="fadeOutRight">FadeRight</option>
					<option in="fadeInLeft" out="fadeOutLeft">FadeLeft</option>
				</optgroup>
				<optgroup label="Bounce">
					<option in="bounceIn" out="bounceOut">Bounce In</option>
					<option in="bounceInDown" out="bounceOutDown">Bounce In Down</option>
					<option in="bounceInLeft" out="bounceOutLeft">Bounce In Left</option>
					<option in="bounceInUp" out="bounceOutUp">Bounce In Up</option>
				</optgroup>
				<optgroup label="Flippers">
					<option in="flipInX" out="flipOutX">Flip X</option>
					<option in="flipInY" out="flipOutY">Flip Y</option>
				</optgroup>
				<optgroup label="Rotate">
					<option in="rotateIn" out="rotateOut">Rotate In</option>
					<option in="rotateInDownLeft" out="rotateOutDownLeft">Rotate In Down Left</option>
					<option in="rotateInDownRight" out="rotateOutDownRight">Rotate In Down Right</option>
					<option in="rotateInUpLeft" out="rotateOutUpLeft">Rotate In Up Left</option>
					<option in="rotateInUpRight" out="rotateOutUpRight">Rotate In Up Right</option>
				</optgroup>
				<optgroup label="Zoom">
					<option in="zoomIn" out="zoomOut">Zoom In</option>
					<option in="zoomInDown" out="zoomOutDown">Zoom In Down</option>
					<option in="zoomInUp" out="zoomOutUp">Zoom In Up</option>
					<option in="zoomInRight" out="zoomOutRight">Zoom In Right</option>
					<option in="zoomInLeft" out="zoomOutLeft">Zoom In Left</option>
				</optgroup>
			</select>
		</div>
		<div style="float: left; padding: 10px">
			<p>Opacity</p>
			<input type="text" id="opacity_hover"  maxlength="2">
		</div>
		<div style="padding: 10px; float: left" id="color-holder">
			<p>COLORS</p>
			<div class="hover-color"><p>Background</p><input type="color" class="hover_colors color" id="background_hover"></div>
			<div class="hover-color"><p>Divider</p><input type="color" class="hover_colors color" id="divider_hover"></div>
			<div class="hover-color"><p>Font</p><input type="color" class="hover_colors color" id="font_hover"></div>
		</div>
		<div style="padding: 10px;float:left">
			<p>MARGINS</p>
			<div class="margin-hover"><p>Top: </p><input type="text" class="hover_margin" id="topmargin_hover"  maxlength="3"><span class="px-holder">px</span></div>
			<div class="margin-hover"><p>Right: </p><input type="text" class="hover_margin" id="rightmargin_hover"  maxlength="3"><span class="px-holder">px</span></div>
			<div class="margin-hover"><p>Bottom: </p><input type="text" class="hover_margin" id="bottommargin_hover"  maxlength="3"><span class="px-holder">px</span></div>
			<div class="margin-hover"><p>Left: </p><input type="text" class="hover_margin" id="leftmargin_hover"  maxlength="3"><span class="px-holder">px</span></div>
		</div>
		<div style="padding: 10px;float:left">
			<div class="hover-font-options"> Spacing:  <input type="text" id="hover_spacing" maxlength="3"><span class="px-holder">px</span> </div>	
			<div class="hover-font-options"> Font Size: <input type="text" id="hover_font_size" maxlength="3"><span class="px-holder">px</span> </div>	
		</div>
		<div class="image_upload" style="margin-top: 14px;padding:10px;display:inline-block">
				<label for="upload_image_hover" style="margin-top: 20px;">
                   <input id="upload_image_hover" type="text" size="36" class="hidden" name="ad_image" value="http://" />
                   <input id="upload_image_button_hover" class="btn" type="button" value="Background Image" style="width: 150px;font-size: 12px;min-height: 36px;" />
                   <input type="button" id="remove_bg_image_hover" value="Remove" class="btn" style="width: 150px;font-size: 12px;min-height: 36px;">
                  <br />
                </label>
			</div>	
		<div style="padding: 10px;">
			CONTENT: <textarea style="width: 100%; height: 150px; resize: vertical" placeholder="Hover Box Content" id="hover_content"></textarea>
		</div>
	</div>
	<div class="tab-pane" id="history" style="display: none">
            	<p text-align="center">NOTE:&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: red">Copy the shortcode and paste it in the page you want your hover effect to display.</span></p>
                <table class="table table-hover" style="width: 100%;text-align: center;">
                    <thead>
                        <tr>
                            <th><?php _e('ID', 'wp-visual-slidebox-builder'); ?></th>
                            <th><?php _e('Title', 'wp-visual-slidebox-builder'); ?></th>
                            <th><?php _e('Shortcode', 'wp-visual-slidebox-builder'); ?></th>
                            <th><?php _e('Created', 'wp-visual-slidebox-builder'); ?></th>
                        </tr>
                    </thead>
                    <tbody class="the_projects">

                    </tbody>
                </table>
            </div>
           </div>

	<!-- End of Right Box -->
	<div>
	<hr>
            
</div>
<div id="dialogoverlay"></div>
<div id="dialogbox">
  <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody"></div>
    <div id="dialogboxfoot"></div>
  </div>
</div>