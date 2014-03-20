
<div class="element-data">
	<div class="row">
		<div class="large-12 column">
			<div class="row data-row">
				<div class="large-3 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('axial_length_'.$side))?></div></div>
				<div class="large-3 column"><div class="data-value" id="al_<?php echo $side?>"><?php echo CHtml::encode($element->{'axial_length_'.$side})?></div></div>
				<div class="large-6 column"><div class="data-value">SNR = 193.0</div></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 column">
			<div class="row data-row">
				<div class="large-3 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('r1'))?></div></div>
				<div class="large-3 column"><div class="data-value" id="r1_<?php echo $side?>"><?php echo CHtml::encode($element->{'r1_'.$side})?></div></div>
				<div class="large-6 column"><div class="data-value" id="r1info_<?php echo $side?>"></div></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 column">
			<div class="row data-row">
				<div class="large-3 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('r2'))?></div></div>
				<div class="large-3 column"><div class="data-value" id="r2_<?php echo $side?>"><?php echo CHtml::encode($element->{'r2_'.$side})?></div></div>
				<div class="large-6 column"><div class="data-value" id="r2info_<?php echo $side?>"></div></div>
			</div>
		</div>
	</div>
	<div class="row">
	<div class="large-12 column">
		<div class="row data-row">
			<div class="large-3 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('r1_axis'))?></div></div>
			<div class="large-3 column end"><div class="data-value" id="r1_axis_<?php echo $side?>"><?php echo CHtml::encode($element->{'r1_axis_'.$side})?></div></div>
		</div>
	</div>
		</div>

	<div class="row">
		<div class="large-12 column">
			<div class="row data-row">
				<div class="large-3 column">
					<div class="data-label">R/SE</div>
				</div>
				<div class="large-3 column">
					<div class="data-value"  id="rse_<?php echo $side?>" class="field-info"></div>
				</div>
				<div class="large-6 column">
					<div class="data-value">SD = 43.16 mm</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 column">
			<div class="row data-row">
				<div class="large-3 column">
					<div class="data-label">Acd</div>
				</div>
				<div class="large-9 column">
					<div class="data-value" id="arc__<?php echo $side?>">2.28mm</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		if(isset($element->{'r1_axis_'.$side}) && $element->{'r1_axis_'.$side}!=0)
		{
			$this->widget('application.modules.eyedraw.OEEyeDrawWidget',
			array(
					'onReadyCommandArray' => array(
							array('addDoodle', array('SteepAxis', array('axis'=>$element->{'r1_axis_'.$side}))),
							array('deselectDoodles', array()),
					),


			'idSuffix' => $side.'_'.$element->elementType->id.'_'.$element->id,
			'side' => ($side == 'right') ? 'R' : 'L',
			'mode' => 'view',
			'width' => 200,
			'height' => 200,
	));
		}?>
</div>