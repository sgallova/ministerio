@extends('layouts.app')
@push('plugin-css')
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
@endpush
@section('content')
    <section class="container-question">
        <div class="rd-container">
            <div class="rd-element rd-s-100">
                <h1 class="text-color-blue-bold title">Conozca sobre la COVID-19</h1>
            </div>
        </div>
        <div class="rd-container container-all-section-evidences">
            <div class="rd-element rd-s-100 rd-l-25">
                <div class="container-evidence">
                    <p>
                        La infección por COVID-19 es menos común en los niños que en los adultos.
                        En los niños la infección suele ser más leve y se presentan más casos sin síntomas.
                     </p>
                      <p>
                      De 100 personas que se infectan por COVID-19, solo 2 son niños.
                    </p>
                </div>
            </div>
            <div class="rd-element rd-s-100 rd-l-25">
                <div class="container-evidence">
                    <p>
                        La posibilidad de que un niño transmita la infección por COVID-19 a otras personas puede ser igual o incluso menor en comparación a los adultos.
                        Los niños no son súper-transmisores como se creía al inicio de la pandemia.
                    </p>
                </div>
            </div>
            <div class="rd-element rd-s-100 rd-l-25">
                <div class="container-evidence">
                    <p>
                        Las secretarías de educación y de salud evalúan el comportamiento del COVID-19 en la región y en la institución,
                        y con base en ello toman decisiones sobre la apertura o cierre de las instituciones educativas.
                    </p>
                </div>
            </div>
            <div class="rd-element rd-s-100 rd-l-25">
                <div class="container-evidence">
                    <p>
                        Para tener jornadas escolares seguras, los protocolos de bioseguridad deben ser cumplidos tanto por los niños, niñas, adolescentes y jóvenes, como por los adultos que entran en la institución educativa.
                        Además, la institución educativa es un espacio para apropiar y promover prácticas de cuidado y autocuidado que son útiles incluso en otros espacios de la vida cotidiana.
                    </p>
                </div>
            </div>
        </div>
        <div class="rd-container">
            <div class="rd-element rd-s-100">
                <h1 class="text-color-blue-bold title"><br><br>Preguntas Frecuentes</h1>
            </div>
        </div>
        <div class="rd-container">
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-1">
                    <p>{!! __('frequent_questions.first_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 to-l">
                <p>El COVID-19 es el nombre de la enfermedad responsable de la pandemia actual. Es una enfermedad principalmente respiratoria y altamente contagiosa.</p>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-2">
                    <p>{!! __('frequent_questions.second_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 to-l">
                <p>La infección por COVID-19 puede causar síntomas muy variados. El virus se considera un virus respiratorio,
                    pero los síntomas que causa no solo son en las vías respiratorias o pulmones.</p>
                <p>Dentro de los síntomas más comunes que hacen sospechar que una persona tiene COVID-19 están:</p>
                <ul class="vinetas no-padding">
                    <li>Fiebre (temperatura mayor de 38 grados centígrados)</li>
                    <li>Dolor de garganta</li>
                    <li>Congestión nasal o salida de mocos por la nariz</li>
                    <li>Tos</li>
                    <li>Dificultad para respirar</li>
                    <li>Dolor de cabeza</li>
                    <li>Fatiga o cansancio</li>
                    <li>Escalofríos</li>
                    <li>Dolor en los músculos</li>
                    <li>Pérdida del gusto y/o del olfato</li>
                </ul>
                <p>Otros síntomas menos comunes son:</p>
                <ul class="vinetas no-padding">
                    <li>Vómitos o diarrea</li>
                    <li>Dolor abdominal</li>
                    <li>Brote en la pie</li>
                </ul>
                <div class="bg-color-blue-ligth p-1em message-doct">
                    <p class="text-color-blue-bold"><b>Si presenta estos síntomas debe consultar a su médico.</b></p>
                </div>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-3">
                    <p>{!! __('frequent_questions.third_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 to-l">
                <p>Los niños, niñas, adolescentes comúnmente presentan formas leves de la enfermedad por covid-19 o la padecen sin síntomas.</p>
                <p>La implementación del protocolo de bioseguridad del sector educativo mitiga el riesgo de contagio para todos los miembros de la comunidad educativa</p>
               <!-- <ul>
                    <li>
                        <b>1. Los mayores de 60 años</b>
                    </li>
                    <li>
                        <b>2. Las personas que tienen alguna de las siguientes condiciones de salud:</b>
                        <ul class="vinetas">
                            <li>Hipertensión</li>
                            <li>Diabetes</li>
                            <li>Enfermedades del corazón</li>
                            <li>Falla renal que requiere diálisis</li>
                            <li>Enfermedad pulmonar obstructiva crónica (EPOC)</li>
                            <li>Enfermedades autoinmunes</li>
                            <li>Deficiencias del sistema inmunológico (inmunodeficiencia)</li>
                            <li>Cáncer de cualquier tipo</li>
                            <li>Sobrepeso u obesidad</li>
                            <li>Desnutrición</li>
                            <li>Fumado</li>
                        </ul>
                    </li>
                </ul>
                <p class="text-color-blue-bold">
                    <b>Consultar al médico para que le indique si su enfermedad lo pone en riesgo de mayor afectación al
                        contagiarse de COVID-19.</b>
                </p>-->
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-4">
                    <p>{!! __('frequent_questions.fourth_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 to-l">
                <ul class="vinetas">
                    <li>
                        <b>Por vía respiratoria:</b> al inhalar del aire las partículas del virus.
                    </li>
                </ul>
            </div>
            <div class="rd-element rd-s-100 to-l">
                <ul class="vinetas">
                    <li>
                        <b>Por contacto:</b> al tocar una superficie contaminada con el virus y luego tocar la cara, los ojos, la nariz o la boca.
                    </li>
                </ul>
            </div>
            <div class="rd-element rd-s-100 to-l three">
                <img src="images/p4-e1-a.png" alt="">
                <img src="images/p4-e1-b.png" alt="">
                <img src="images/p4-e1-c.png" alt="">
            </div>
            <div class="rd-element rd-s-100 to-l">
                <p class="text-small">
                    Tomado y traducido de: “Considerations for Preparing for In-Person Learning During COVID-19. Emily Frank, MD,
                    Pediatrician & Public School Teacher; Noemi Spinazzi, MD, Pediatrician; and Sohil Sud, MD, Pediatrician. UCSF
                    Collaborative to Advise on Re-opening Education Safely (CARES). 13 Agosto 2020. Disponible en:
                    https://ucsf.app.box.com/s/4zo1v5sz7i4sh2faijleoyi9icwsakme/file/706573140807
                </p>
            </div>
            <div class="rd-element rd-s-100 to-l four">
                <img src="images/p4-e2-a.png" alt="">
                <img src="images/p4-e2-c.png" alt="">
                <img src="images/p4-e2-b.png" alt="">
                <img src="images/p4-e2-d.png" alt="">
            </div>
            <div class="rd-element rd-s-100 to-l">
                <p class="text-small">
                    Tomado y traducido de: “Considerations for Preparing for In-Person Learning During COVID-19. Emily Frank, MD,
                    Pediatrician & Public School Teacher; Noemi Spinazzi, MD, Pediatrician; and Sohil Sud, MD, Pediatrician. UCSF
                    Collaborative to Advise on Re-opening Education Safely (CARES). 13 Agosto 2020. Disponible en:
                    https://ucsf.app.box.com/s/4zo1v5sz7i4sh2faijleoyi9icwsakme/file/706573140807
                </p>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-5">
                    <p>{!! __('frequent_questions.fifth_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 to-l">
                <p>La infección por COVID-19 es menos común en los niños que en los adultos.</p>
                <p>
                    De 100 personas que se infectan, solo 2 son niños, es decir,
                    solo el 2% de las personas que se infectan por COVID-19 son niños o adolescentes.
                </p>
            </div>
            <div class="rd-element rd-s-100 to-l">
                <img src="images/img-1.png" alt="">
                <br>
                <br>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-6">
                    <p>{!! __('frequent_questions.sixth_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 to-l">
                <p>
                    Consiste en adoptar con el consentimiento de las familias y los estudiantes, la combinación de estrategias de trabajo educativo en casa con
                    encuentros presenciales en los establecimientos educativos, previo diagnóstico de cumplimiento de las condiciones de bioseguridad y el permanente seguimiento al comportamiento de la pandemia para preservar el bienestar de la comunidad educativa.
                </p>
                <p>
                    Esto implica para directivos y docentes: ajuste del plan de estudios, adecuación de la jornada escolar, definición de los estudiantes que pueden retornar, cantidad de grupos,
                    lugares de encuentro según las actividades que se identifique viable realizar en cada establecimiento.

                </p>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-7">
                    <p>{!! __('frequent_questions.seventh_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 to-l">
                <p>
                    El contagio es poco probable si en las instituciones educativas se toman las medidas de bioseguridad de forma estricta,
                    niños, niñas, adolescentes, jóvenes y adultos se apropian de las medidas de cuidado y autocuidado,
                    y estos aprendizajes se promueven en el hogar.
                </p>
                <p>
                    Los estudios internacionales indican que, si en las instituciones educativas se toman las medidas de bioseguridad de forma estricta,
                    el contagio es poco probable. En Corea del Sur y en Australia, por ejemplo, varias semanas después de abrir las escuelas,
                    no se aumentó la tasa de casos de COVID-19 en niños.
                </p>
                <p>
                    Cuando un niño es positivo para COVID-19, es más probable que se lo haya transmitido un adulto en su núcleo familiar,
                    que otro niño en su institución educativa.
                </p>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-8">
                    <p>{!! __('frequent_questions.eighth_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 to-l">
                <p>
                    La falta de asistencia presencial de los niños, niñas, adolescentes y jóvenes a su institución educativa no previene el contagio.
                    El cierre de las instituciones educativas se implementó en casi todo el mundo desde abril del 2020 para evitar la
                    propagación del nuevo coronavirus; sin embargo, los estudios indican que esto no previene el contagio.
                </p>
                <p>
                    Para evitar el contagio del COVID-19 se deben seguir las recomendaciones de bioseguridad, tanto los niños, niñas,
                    adolescentes y jóvenes, como todos los adultos que conviven o están en contacto con ellos.
                </p>
                <p>
                    Los niños, niñas, adolescentes y jóvenes pueden contagiarse si realizan actividades con otras personas contagiadas,
                    o si sus padres o cuidadores se contagian por fuera del hogar.
                </p>
                <p>
                    Es importante reconocer que todas las personas tienen posibilidad de contagiarse de COVID-19, por lo tanto, se deben
                    seguir en todos los espacios de interacción, los principios de cuidado y autocuidado.
                </p>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-9">
                    <p>{!! __('frequent_questions.ninth_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 to-l">
                <p>La decisión de reabrir las instituciones educativas se sustenta en varios motivos:</p>
                <ul class="vinetas no-padding">
                    <li>Permite el cumplimiento de la garantía del derecho a la educación a quienes la emergencia sanitaria ha impedido la continuidad del proceso de aprendizaje.</li>
                    <li>Mejora la calidad del aprendizaje de los niños, niñas, adolescentes y jóvenes.</li>
                    <li>Las interacciones en la presencialidad son fundamentales para el desarrollo integral de los niños, niñas, adolescentes y jóvenes.</li>
                    <li>Favorece el acceso y la permanencia, y por tanto trayectorias educativas desde la primera infancia hasta la educación superior.</li>
                    <li>Promueve la equidad en las oportunidades de aprendizaje</li>
                    <li>Disminuye los riesgos de vulneración y aumenta los factores de protección de los derechos de los niños, niñas, adolescentes y jóvenes.</li>
                    <li>Retomar la institución educativa como espacio protector de los derechos de los niños, niñas, adolescentes y jóvenes.</li>
                    <li>Contribuye al bienestar de la familia al aliviar la carga laboral y económica que representa para algunos padres renunciar al empleo y quedarse en casa al cuidado de los hijos.</li>
                </ul>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-10">
                    <p>{!! __('frequent_questions.tenth_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 to-l">
                <p>
                    Los padres, cuidadores, niños, niñas, adolescentes y jóvenes deben revisar diariamente que no tengan síntomas de la enfermedad.
                </p>
                <p>
                    En caso de que alguno tenga síntomas, debe avisarse a la institución educativa,
                    no asistir a la institución, ni debe permitirse su ingreso a la misma.
                </p>
                <p>
                    Debe llamarse inmediatamente a su EPS correspondiente, y seguir al pie de la letra las instrucciones y recomendaciones del médico.
                </p>
                <p>
                    En caso de que un estudiante en la institución sea sospechoso de tener COVID-19 debe aislarse y llamar a sus acudientes.
                </p>
            </div>
            <div class="rd-element rd-s-100 rd-l-20">
                <div class="container-frequent-question" data-modal="modal-11">
                    <p>{!! __('frequent_questions.eleventh_question') !!}</p>
                </div>
            </div>
            <div class="rd-element rd-s-100 to-l">
                <p>La capacidad de que un niño transmita la infección por COVID-19 a otras personas (otros niños o adultos) puede ser igual o incluso menor en comparación a los adultos.</p>
                <p>Los niños no son súper-transmisores como se creía al inicio de la pandemia.</p>
                <p>Cuando hay personas positivas para COVID-19 en una familia, rara vez el niño es el caso inicial. Suelen ser las personas adultas de la familia.</p>
            </div>
        </div>
    </section>
    <section class="from-l">
        @include('components.modals')
    </section>
    <section class="bg-color-blue-blod full margin-top-2-5em">
        <div class="rd-container">
            <div class="rd-element rd-s-100 t-center flex rd-element-align-center rd-element-justify-center">
                <p class="text-color-blue-ligth flex rd-element-align-center">Ir al Siguiente Tema <a class="next-sub next-two" href="{{ route('benefits-alternation') }}"></a></p>
            </div>
        </div>
    </section>
@endsection
@push('plugin-js')
    <script src="{{ asset('js/know_about.js') }}"></script>
@endpush
