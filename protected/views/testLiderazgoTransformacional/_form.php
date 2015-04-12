<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'test-liderazgo-transformacional-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

        <p>
            <h3><b>Test de Liderazgo Transformacional</b><br/>
            Califique de 1 a 5, siendo 5 el mas alto y 1 el de menos valor</h3>
        </p>

	<div class="row">
		<?php echo $form->labelEx($model,'capital_humano_id'); ?>
                <?php echo $form->dropDownList($model, 'capital_humano_id', 
                        CHtml::listData(CapitalHumano::model()->findAll(), 'id', 'nombre', 'tiponombre'),
                        array('prompt'=>'Seleccionar...', 'empty'=>'Sin elementos')
                ); ?>
		<?php echo $form->error($model,'capital_humano_id'); ?>
	</div>

        <table>
            <tr>
                <th></th>
                <th style="width: 450px">Descripci&oacute;n</th>
                <th>Calificaci&oacute;n</th>
            </tr>

            <tr>
                <td>1</td>
                <td>Proporciono apoyo a otros a cambio de sus esfuerzos</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p01proporciono', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p01proporciono'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Reexamino las consideraciones críticas sobre una situación determinada para asegurarme de su pertinencia</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p02reexamino', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p02reexamino'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>3</td>
                <td>No interfiero hasta que los problemas se tornan serios</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p03interfiero', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p03interfiero'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>4</td>
                <td>Enfoco mi atención en irregularidades, errores, excepciones y desviaciones de las normas fijas</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p04enfoco', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p04enfoco'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>5</td>
                <td>Evito involucrarme cuando surgen asuntos importantes</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p05evito', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p05evito'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>6</td>
                <td>Hablo acerca de mis valores y creencias más importantes</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p06hablo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p06hablo'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>7</td>
                <td>Me ausento cuando es necesario</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p07ausento', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p07ausento'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>8</td>
                <td>Busco perspectivas opuestas al solucionar problemas</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p08perspectivas', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p08perspectivas'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>9</td>
                <td>Hablo con optimismo acerca del futuro</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p09optimismo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p09optimismo'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>10</td>
                <td>Infundo orgullo en otros por estar asociados conmigo</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p10infundo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p10infundo'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>11</td>
                <td>Me refiero en términos específicos al determinar quién es responsable de haber logrado las metas de desempeño</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p11refiero', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p11refiero'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>12</td>
                <td>Espero a que las cosas salgan mal antes de tomar medidas</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p12espero', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p12espero'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>13</td>
                <td>Hablo con entusiasmo acerca de lo que se debe lograr</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p13entusiasmo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p13entusiasmo'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>14</td>
                <td>Especifico la importancia de tener un fuerte sentido de los propósito</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p14especifico', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p14especifico'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>15</td>
                <td>Dedico tiempo a enseñar y entrenar a los demás</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p15dedico', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p15dedico'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>16</td>
                <td>Dejo en claro lo que se puede esperar recibir cuando se logran las metas de desempeño</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p16dejo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p16dejo'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>17</td>
                <td>Demuestro que soy un fiel creyente de que "si no está quebrado, no lo arregle"</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p17demuestro', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p17demuestro'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>18</td>
                <td>Abandono mis intereses personales por el bien del grupo</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p18abandono', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p18abandono'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>19</td>
                <td>Trato a los demás como individuos, en vez de como si fueran sólo un miembro del grupo</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p19trato', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p19trato'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>20</td>
                <td>Demuestro que los problemas deben convertirse en crónicos antes de tomar medidas</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p20cronicos', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p20cronicos'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>21</td>
                <td>Actúo de tal manera que hago que los demás tengan respeto por mí</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p21actuo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p21actuo'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>22</td>
                <td>Me concentro plenamente en tratar errores, quejas y fallas</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p22concentro', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p22concentro'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>23</td>
                <td>Considero las consecuencias de las decisiones morales y éticas</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p23considero', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p23considero'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>24</td>
                <td>Llevo la cuenta de todos los errores</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p24llevo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p24llevo'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>25</td>
                <td>Demuestro un sentido de poder y confianza</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p25demuestro', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p25demuestro'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>26</td>
                <td>Expreso clara y convincentemente mi visión de futuro</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p26vision', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p26vision'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>27</td>
                <td>Dirijo mi atención hacia el incumplimiento de normas</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p27dirijo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p27dirijo'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>28</td>
                <td>Evito tomar decisiones</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p28decisiones', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p28decisiones'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>29</td>
                <td>Considero a cada individuo como persona que tiene sus propias necesidades, habilidades y aspiraciones</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p29individuo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p29individuo'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>30</td>
                <td>Hago que los demás vean los problemas desde diferentes ángulos</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p30hago', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p30hago'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>31</td>
                <td>Ayudo a que los demás desarrollen sus fortalezas</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p31ayudo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p31ayudo'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>32</td>
                <td>Sugiero nuevas formas de ver cómo terminar las tareas asignadas</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p32sugiero', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p32sugiero'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>33</td>
                <td>Tardo en responder a preguntas urgentes</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p33tardo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p33tardo'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>34</td>
                <td>Enfatizo la importancia de tener un sentido colectivo para lograr una misión</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p34enfatizo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p34enfatizo'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>35</td>
                <td>Expreso satisfacción cuando los demás logran metas u objetivos</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p35expreso', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p35expreso'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>36</td>
                <td>Expreso confianza en que las metas serán logradas</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p36confianza', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p36confianza'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>37</td>
                <td>Soy eficaz en satisfacer las necesidades de los demás relacionadas con el trabajo</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p37eficaz', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p37eficaz'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>38</td>
                <td>Utilizo métodos satisfactoriios de liderazgo</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p38utilizo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p38utilizo'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>39</td>
                <td>Hago que los demás hagan más de lo que se espera que hagan</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p39espera', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p39espera'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>40</td>
                <td>Soy eficiente para representar a mi grupo delante de las autoridades más altas</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p40eficiente', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p40eficiente'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>41</td>
                <td>Trabajo con los demás de manera satisfactoria</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p41trabajo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p41trabajo'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>42</td>
                <td>Elevo los deseos de los demás de tener éxito</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p42elevo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p42elevo'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>43</td>
                <td>Soy eficiente en lograr los objetivos organizacionales</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p43organizacionales', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p43organizacionales'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>44</td>
                <td>Motivo el interés de las personas para trabajar con mayor ESFUERZO</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p44motivo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p44motivo'); ?>
                    </div>
                </td>
            </tr>

            <tr>
                <td>45</td>
                <td>Encabezo un grupo eficiente</td>
                <td>
                    <div class="row">
                        <div class="compactRadioGroup">
                            <?php echo $form->radioButtonList($model, 'p45encabezo', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('separator'=>' | ')); ?>
                        </div>
                        <?php echo $form->error($model,'p45encabezo'); ?>
                    </div>
                </td>
            </tr>
        </table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
