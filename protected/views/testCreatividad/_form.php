<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'test-creatividad-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

        <p>
            <h3><b>Test de Creatividad</b><br/>
            Califique de 1 a 5, siendo 5 el mas alto y 1 el de menos valor</h3>
        </p>

	<div class="row">
		<?php echo $form->labelEx($model,'capital_humano_id'); ?>
                <?php echo $form->dropDownList($model, 'capital_humano_id',
                        CHtml::listData(CapitalHumano::model()->findAll(), 'id', 'nombre')
                ); ?>
		<?php echo $form->error($model,'capital_humano_id'); ?>
	</div>

        <table>
            <tr>
                <th></th>
                <th>Aspecto</th>
                <th style="width: 250px">Descripci&oacute;n</th>
                <th>Calificaci&oacute;n</th>
            </tr>

            <tr>
                <td>1</td>
                <td>Productividad</td>
                <td>Tienes muchas ideas y proyectos. Escribes y dibujas mucho en poco tiempo</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p01productividad', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p01productividad'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Agilidad y Flexibilidad</td>
                <td>Propones ideas y alternativas de muy diversa índole. No te encajas en una úncia linea de pensamiento o solución</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p02agilidad', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p02agilidad'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>3</td>
                <td>Originalidad</td>
                <td>Concibes ideas y cosas que aún no existen. Realizas cosas y acciones que sorprenden y rompen con lo usual. Transgredes normas o fórmulas habituales</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p03originalidad', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p03originalidad'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>4</td>
                <td>Diversión y Humor</td>
                <td>Tienes sentido del humor. Ves las cosas de modo diferente e inusual. Sorprendes y haces reir con tus gestos y mimica. Imitas comicamente a los demás</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p04diversion', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p04diversion'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>5</td>
                <td>Automotivación</td>
                <td>Estás fuertementemente motivado por una idea o proyecto que te ronda meses en la cabeza, o trabajas hasta agotar todas las posibilidades. No te rindes. Tienes</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p05automotivacion', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p05automotivacion'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>6</td>
                <td>Persistencia en Hobbies de tu interés</td>
                <td>Crees que vas a haceralgo muy relevante y único. Trabajas con dedicación continuada</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p06persistencia', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p06persistencia'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>7</td>
                <td>Lenguajes Creativos</td>
                <td>Te expresas indistintamente con palabras (L verbal), con diseño y garabatos (L plástico), con gestos (L corporal) y sonidos (L Musical)</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p07lenguajes', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p07lenguajes'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>8</td>
                <td>Variedad y abundancia d información</td>
                <td>Manejas muchos datos, muy diversos y los conbinas de modo variado para obtener ricas y sorprendentes síntesis.</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p08variedad', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p08variedad'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>9</td>
                <td>Fluencia</td>
                <td>Tiene una fácil y rica evocación de los datos de la conciencia  mediante la libre asociación de ideas sin autocensuras ni bloqueos y mediante el automatismo de la escritura y el comportameinto o dramatización de los mismos.</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p09fluencia', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p09fluencia'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>10</td>
                <td>Visualización imaginativa</td>
                <td>Piensas en imágenes. Ves los objetos y los procesos en la pantalla de tu mente.</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p10visualizacion', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p10visualizacion'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>11</td>
                <td>Analogía</td>
                <td>Piensas en fenómenos o cosas que se parecen. Buscan aquellas que son similares al objeto estudiado</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p11analogia', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p11analogia'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>12</td>
                <td>Problemas y Fallos</td>
                <td>Tienes dudas e interrogantes sobre las cosas que estimulan tu curiosidad por saber y el deseo de cambio e innovación de mejora. Sientes los problemas y fallos como retos y oportunidades para el éxito, en lugar de preocuparse desasosegarse y angustiarte sin hacer nada.</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p12problemas', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p12problemas'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>13</td>
                <td>Experimentos de ensayo y error</td>
                <td>Tienes ideas y sugerencias y las llevas a la práctica, para ver que pasa. Las ensayas para ver como funcionan,sin miedo al error o al fracaso</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p13experimentos', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p13experimentos'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>14</td>
                <td>Innovación</td>
                <td>Concibes facilmente las cosas y los procesos como algo que puede varias y mortificarse, no como algo estático y fijo. Visualizas y ensayas esas variaciones.</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p14innovacion', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p14innovacion'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>15</td>
                <td>Inventiva</td>
                <td>Imaginas objetos y procesos, instrumentos y retos totalemnte nuevos e ineditosy y concibes formas unicas de resolución y logro. Todo ser humano es un inventor en potencia,un ser eminentemente inventivo</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p15inventiva', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p15inventiva'); ?>
                    </div>
                </td>
            </tr>
        </table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
