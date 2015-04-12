<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'test-emprendimiento-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

        <p>
            <h3><b>Test para valorar el Emprendedor y sus ideas</b><br/>
            Fuente: Universidad de Extremadura</h3>
        </p>

        <p>
            <b>1. Introducci&oacute;n</b><br/>
            Este test de auto diagnóstico identifica el grado de maduración de su proyecto empresarial en base a tres grandes ejes: las capacidades y habilidades para emprender, la idea de negocio y el análisis del mercado al que se dirige. A continuación aparecerá una batería de preguntas, valore sus respuestas según la escala que encontrará en cada pregunta.
        </p>

        
	<div class="row">
		<?php echo $form->labelEx($model,'capital_humano_id'); ?>
                <?php echo $form->dropDownList($model, 'capital_humano_id',
                        CHtml::listData(CapitalHumano::model()->findAll(), 'id', 'nombre')
                ); ?>
		<?php echo $form->error($model,'capital_humano_id'); ?>
	</div>

        <p />

        <p>
            <b>2. El Emprendedor</b>
        </p>

        <div class="row">
            <?php echo '1. ¿Le estimula tener que enfrentarse con nuevos retos?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p201estimula', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p201estimula'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '2. ¿Tiene predisposición para asumir riesgos?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p202predisposicion', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p202predisposicion'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '3. Es una persona que le gusta tomar la iniciativa en situaciones complejas o delicadas.' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p203iniciativa', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p203iniciativa'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '4. Generalmente, dedica las horas necesarias para hacer bien una tarea o llevar a cabo un proyecto.' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p204dedica', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p204dedica'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '5. Aunque se trate de personas que no conozca, se considera una persona que se relaciona fácilmente con los otros.' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p205relaciona', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p205relaciona'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '6. ¿Considera importante poseer autonomía en el trabajo?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p206autonomia', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p206autonomia'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '7. En el caso de que sus decisiones no sean correctas, ¿le importa asumir la responsabilidad?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p207responsabilidad', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p207responsabilidad'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '8. Sin duda, se puede definir como una persona independiente y enérgica.' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p208independiente', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p208independiente'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '9. Normalmente es capaz de prever y avanzarse a los hechos.' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p209prever', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p209prever'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '10. Antes de iniciar un proyecto, establece por escrito los objetivos concretos que quiere alcanzar.' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p210objetivos', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p210objetivos'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '11. ¿Tiene formación o experiencia en el sector donde quiere iniciar su negocio?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p211experiencia', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p211experiencia'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '12. Es una persona acostumbrada a trabajar en equipo y coordinar grupos de trabajo.' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p212equipo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p212equipo'); ?>
        </div>

        <p />

        <p>
            <b>3. La Idea</b>
        </p>

        <div class="row">
            <?php echo '1. ¿Tiene notas escritas donde explica y detalla su proyecto empresarial?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p31explica', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p31explica'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '2. Iniciar la actividad y generar beneficios, no es lo mismo. ¿Está de acuerdo?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p32iniciar', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p32iniciar'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '3. Cada negocio tiene un tiempo y un lugar oportuno. ¿Ha tenido en cuenta estos factores?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p33oportuno', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p33oportuno'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '4. ¿Está realmente convencido de que ha llegado el momento oportuno para llevar a cabo su idea de negocio?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p34convencido', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p34convencido'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '5. ¿Dispone de suficientes medios económicos para cubrir la etapa de arranque de su proyecto (los seis primeros meses de vida)?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p35arranque', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p35arranque'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '6. ¿Ha realizado algún tipo de presupuesto de inversión para el inicio de su negocio, así como el cálculo de los beneficios posibles a obtener con la puesta en marcha de éste?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p36presupuesto', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p36presupuesto'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '7. ¿Ha establecido algún contacto, solicitado alguna opinión, que le haya reafirmado en su convencimiento en cuanto al futuro de su proyecto?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p37contacto', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p37contacto'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '8. Si una persona allegada le propusiera participar en un proyecto idéntico al que se está planteando, ¿invertiría decididamente?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p38invertiria', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p38invertiria'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '9. ¿Conoce perfectamente el producto o servicio que va a ser la base de su negocio?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p39conoce', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p39conoce'); ?>
        </div>

        <p />

        <p>
            <b>4. El Mercado</b>
        </p>

        <div class="row">
            <?php echo '1. ¿Existen empresas que operan en el mismo sector ofreciendo productos o servicios similares al que piensa lanzar?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p41empresas', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p41empresas'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '2. ¿Conoce perfectamente cómo actúan las empresas que compiten en el mercado o sector en el que se va a incorporar? ¿Conoce los precios, las formas de pago y cobro y otras condiciones habituales?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p42actuan', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p42actuan'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '3. Si no dispone de todos estos datos ¿sabe cómo conseguirlos de una manera fiable?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p43datos', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p43datos'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '4. ¿Está plenamente convencido de que puede abrirse paso en el mercado con su producto o servicio?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p44convencido', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p44convencido'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '5. En el momento de plantearse la idea de negocio, sobre todo ha tenido en cuenta el punto de vista del cliente o consumidor.' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p45vista', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p45vista'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '6. Si tuviera que definir el mercado o sector que corresponde a su negocio, ¿diría que está en recesión, o en crecimiento?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p46mercado', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p46mercado'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '7. ¿Dispone o conoce de mecanismos, instrumentos y fuentes de información donde recopilar datos acerca de la evolución y la tendencia del mercado al que se dirige?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p47mecanismos', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p47mecanismos'); ?>
        </div>

        <p />

        <div class="row">
            <?php echo '8. ¿Dada la actual situación económica, ¿cree Vd. que es el momento más adecuado para poner en marcha su empresa?' ?>
            <div class="compactRadioGroup">
                <?php echo 'No | '.$form->radioButtonList($model, 'p48situacion', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')).' | Si'; ?>
            </div>
            <?php echo $form->error($model,'p48situacion'); ?>
        </div>

        <p />

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
