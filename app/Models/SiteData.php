<?php
declare(strict_types=1);

/*
 | Modelo de datos del sitio (Minera MH S.A.C. — Planta El Rubí).
 | Centraliza todo el contenido. En el futuro podría leerse de una base
 | de datos sin cambiar las vistas.
 */
class SiteData
{
    public static function all(): array
    {
        return [
            'brand' => ['name' => 'EL RUBÍ', 'company' => 'Minera MH S.A.C.'],

            'nav' => [
                ['id' => 'inicio',         'route' => '',               'label' => 'Inicio'],
                ['id' => 'servicios',      'route' => 'servicios',      'label' => 'Servicios'],
                ['id' => 'procesos',       'route' => 'procesos',       'label' => 'Procesos'],
                ['id' => 'empresa',        'route' => 'empresa',        'label' => 'Empresa'],
                ['id' => 'sostenibilidad', 'route' => 'sostenibilidad', 'label' => 'Sostenibilidad'],
                ['id' => 'contacto',       'route' => 'contacto',       'label' => 'Contacto'],
            ],

            'hero' => [
                'since'    => 'Minera MH S.A.C. · Planta El Rubí · Desde 2014',
                'headline' => ['MINERÍA', 'RESPONSABLE'],
                'sub'      => 'Compra de mineral aurífero a precios justos, con pago en 48 horas y apoyo real a la minería artesanal formalizada.',
                'cta1'     => 'Nuestros Servicios',
                'cta2'     => 'Vender Mineral',
                'image'    => 'https://images.unsplash.com/photo-1628487749130-2d41acb1802a?w=1920&auto=format&fit=crop&q=80',
            ],

            'stats' => [
                ['val' => '10+',  'label' => 'Años de Operación'],
                ['val' => '500+', 'label' => 'Mineros Formalizados'],
                ['val' => '95%',  'label' => 'Retorno de Clientes'],
                ['val' => '5+',   'label' => 'Zonas de Acopio'],
            ],

            'banners' => [
                'servicios'      => ['eyebrow' => 'Servicios',  'title' => 'Servicios',      'sub' => 'Compra de mineral aurífero con precios justos, pago en 48h y respaldo a la formalización.'],
                'procesos'       => ['eyebrow' => 'Operaciones','title' => 'Procesos',       'sub' => 'Del acopio al pago: un proceso ágil, transparente y seguro.'],
                'empresa'        => ['eyebrow' => 'Nosotros',   'title' => 'Empresa',        'sub' => 'Una década consolidando la minería formal y responsable en Arequipa.'],
                'sostenibilidad' => ['eyebrow' => 'Compromiso', 'title' => 'Sostenibilidad', 'sub' => 'Apoyamos a los pequeños productores en cada paso de su formalización.'],
                'contacto'       => ['eyebrow' => 'Contáctanos','title' => 'Contacto',       'sub' => 'Atención de lunes a domingo de 8:00 a 18:00 en Chala, Arequipa.'],
            ],

            'servicesTitle' => 'COMPRA DE MINERAL AURÍFERO',
            'servicesSub'   => 'Respaldo irrestricto a la minería artesanal en vías de formalización. Estas son las razones para elegirnos.',
            'services' => [
                ['title' => 'Precios Justos y Competitivos', 'desc' => 'Evaluación precisa y transparente del mineral con tecnología de última generación. Precios entre 5% y 10% superiores al promedio de mercado, sin intermediarios y con pago inmediato.'],
                ['title' => 'Proceso Ágil y Seguro',         'desc' => 'Compra eficiente respaldada por una infraestructura moderna. Del recojo al pago efectivo en un máximo de 48 horas. Seguros incluidos y sin papeleos ocultos.'],
                ['title' => 'Relación de Confianza',         'desc' => 'Más de 20 años de experiencia acumulada. Respaldo de más de 500 mineros artesanales formalizados, 95% de retorno de clientes y cero disputas legales en 10 años.'],
                ['title' => 'Apoyo a la Formalización',      'desc' => 'Asesoramiento legal y tributario gratuito, tramitación ante la DREM, apoyo en la constitución de empresas y capacitación en seguridad minera.'],
            ],

            'processTitle' => 'NUESTRO PROCESO',
            'processSub'   => 'Del acopio al pago: un flujo ágil, transparente y seguro.',
            'process' => [
                ['num' => '01', 'title' => 'Acopio',         'desc' => 'Recepción del mineral en nuestras 5 zonas estratégicas: Secocha, Huanca, Colquemarca y Pacoya.'],
                ['num' => '02', 'title' => 'Evaluación',     'desc' => 'Análisis preciso y transparente de la ley del mineral con tecnología de última generación.'],
                ['num' => '03', 'title' => 'Procesamiento',  'desc' => 'Procesamiento metalúrgico continuo en la Planta El Rubí, Chala, con altos estándares de eficiencia.'],
                ['num' => '04', 'title' => 'Pago Inmediato', 'desc' => 'Liquidación justa en un máximo de 48 horas, sin intermediarios ni papeleos ocultos.'],
            ],

            'valuesTitle' => 'NUESTROS VALORES',
            'values' => [
                ['title' => 'Responsabilidad y Cuidado',  'desc' => 'Actuamos con máxima responsabilidad al gestionar operaciones industriales y al interactuar con el entorno ambiental.'],
                ['title' => 'Eficiencia y Calidad',       'desc' => 'Maximizamos el rendimiento de los procesos operativos y metalúrgicos manteniendo estándares estrictos.'],
                ['title' => 'Seguridad y Bienestar',      'desc' => 'Procedimientos preventivos rígidos y formación continua para proteger la integridad de los colaboradores.'],
                ['title' => 'Transparencia y Honestidad', 'desc' => 'Operamos con total transparencia, garantizando prácticas abiertas y cuentas claras para todos los stakeholders.'],
                ['title' => 'Trabajo en Equipo',          'desc' => 'Fomentamos un ambiente sólido de colaboración, respeto mutuo y apoyo entre los miembros del equipo.'],
            ],

            'about' => [
                'historyTitle' => 'NUESTRA HISTORIA',
                'history' => [
                    'La empresa nació de la iniciativa de un grupo de mineros artesanales en pleno proceso de formalización. Su primera operación de prueba consistió en el alquiler de una planta metalúrgica para procesar 10 TM de mineral aurífero.',
                    'Tras obtener resultados sumamente positivos y rentables, el grupo decidió incrementar la inversión. El 25 de marzo de 2014 se consolidó el hito más importante de su trayectoria con la adquisición de toda la razón social de Minera MH S.A.C. y la infraestructura de la Planta El Rubí.',
                    'Hoy la empresa cuenta con un sólido despliegue logístico de 5 zonas de acopio y un activo minero propio: la Mina Sociedad Esperanza, cerca de Secocha. El plan de expansión contempla nuevas zonas de acopio y la explotación de sus propias concesiones autorizadas.',
                ],
                'misionLabel' => 'Misión',
                'mision' => 'Buscamos trabajar con personas y empresas de confianza, logrando un ecosistema laboral que se sienta familiar y honesto. A diferencia de nuestros competidores, también buscamos conectarnos con empresas nacionales ofreciendo el mismo trato de crecimiento, reflejado en el apoyo a las comunidades cercanas gracias a nuestra actividad responsable.',
                'visionLabel' => 'Visión',
                'vision' => 'Buscamos mejorar el impacto social que tenemos en las comunidades con las que trabajamos, apoyados de todos nuestros aliados, con mucho esfuerzo y esperanza de un mañana mejor. Queremos cambiar y mejorar el panorama de nuestro rubro y la percepción que se tiene de este, mejorando la calidad de vida de todos los involucrados.',
            ],

            'newsTitle' => 'NOTICIAS Y EVENTOS',
            'newsSub'   => 'Lo más reciente en la Planta El Rubí.',
            'news' => [
                ['date' => '5 Oct 2024',  'title' => 'Simulacro de Emergencia ante Incendios', 'desc' => 'Despliegue operativo interno para garantizar la seguridad de la planta y preparar al equipo ante escenarios de riesgo real, fortaleciendo la cultura preventiva.'],
                ['date' => '30 Ago 2024', 'title' => 'Aniversario Institucional',              'desc' => 'Conmemoración oficial de los años de servicio de Minera MH S.A.C., reafirmando el compromiso con la minería responsable y reconociendo a colaboradores, socios y clientes.'],
                ['date' => '1 May 2024',  'title' => 'Campeonato Interno de Futsal',            'desc' => 'Actividad de integración para fortalecer los lazos de confianza entre colaboradores, incentivar el trabajo en equipo y promover un estilo de vida saludable.'],
            ],

            'certsTitle' => 'APOYO A LA FORMALIZACIÓN',
            'certsSub'   => 'Acompañamos a los pequeños productores en cada paso de su formalización.',
            'certs' => [
                'Asesoría Legal Gratuita', 'Asesoría Tributaria', 'Tramitación ante DREM',
                'Constitución de Empresas', 'Capacitación en Seguridad', 'Minería Formalizada',
            ],

            'quote' => [
                'text'   => 'Minería responsable para todos. Con orgullo y compromiso, avanzamos en la minería.',
                'author' => 'Minera MH S.A.C.',
                'role'   => 'Planta El Rubí — Chala, Arequipa',
            ],

            'explore' => [
                ['route' => 'servicios',      'label' => 'Servicios',      'desc' => 'Compra de mineral aurífero a precios justos y con pago inmediato.'],
                ['route' => 'procesos',       'label' => 'Procesos',       'desc' => 'Acopio, evaluación, procesamiento y pago en 48 horas.'],
                ['route' => 'empresa',        'label' => 'Empresa',        'desc' => 'Nuestra historia, misión, visión y valores corporativos.'],
                ['route' => 'sostenibilidad', 'label' => 'Sostenibilidad', 'desc' => 'Apoyo legal y tributario gratuito a la minería artesanal.'],
            ],
            'exploreTitle' => 'EXPLORA EL RUBÍ',
            'exploreSub'   => 'Conoce cada faceta de nuestra operación minera.',

            'cta' => [
                'title' => '¿Tienes mineral aurífero para vender?',
                'sub'   => 'Recibe una evaluación transparente y el pago en un máximo de 48 horas.',
                'btn'   => 'Solicitar Cotización',
            ],

            'contactTitle' => 'CANALES DE ATENCIÓN',
            'info' => [
                'office' => 'Chala – Caravelí – Arequipa – Perú',
                'hours'  => 'Lunes a Domingo · 8:00–18:00',
                'phone'  => '+51 913 910 591',
                'email'  => 'administracion@mineramhsac.com',
                'mapsEmbed' => 'https://www.google.com/maps?q=-15.830812,-74.289512&hl=es&z=13&output=embed',
                'departments' => [
                    ['area' => 'Recursos Humanos', 'phone' => '+51 902 928 602', 'email' => 'recursoshumanos@mineramhsac.com'],
                    ['area' => 'Área Comercial',   'phone' => '+51 913 910 591', 'email' => 'administracion@mineramhsac.com'],
                    ['area' => 'Área Logística',   'phone' => '+51 972 246 008', 'email' => 'logistica@mineramhsac.com'],
                ],
            ],

            'footer' => [
                'desc' => 'Minera MH S.A.C. – Planta El Rubí. Compra de mineral aurífero y apoyo a la minería artesanal formalizada en Chala, Arequipa.',
                'locs' => ['Secocha', 'Huanca', 'Colquemarca', 'Pacoya'],
                'copy' => '© ' . date('Y') . ' Planta El Rubí — Minera MH S.A.C.',
                'socials' => [
                    ['icon' => 'facebook',  'title' => 'Facebook',  'href' => 'https://www.facebook.com/people/Minera-MH/'],
                    ['icon' => 'instagram', 'title' => 'Instagram', 'href' => 'https://www.instagram.com/mineramh'],
                    ['icon' => 'youtube',   'title' => 'YouTube',   'href' => 'https://www.youtube.com/@MINERAMHPLANTAELRUBI'],
                ],
            ],
        ];
    }
}
