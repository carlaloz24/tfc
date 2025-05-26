const alimentos = {
    pollo_pechuga: { kcal: 1.65, proteinas: 0.21, grasas: 0.09, carbohidratos: 0 },
    pollo_muslo: { kcal: 2.09, proteinas: 0.19, grasas: 0.15, carbohidratos: 0 },
    pavo: { kcal: 1.35, proteinas: 0.22, grasas: 0.05, carbohidratos: 0 },
    ternera: { kcal: 2.5, proteinas: 0.20, grasas: 0.19, carbohidratos: 0 },
    cordero: { kcal: 2.94, proteinas: 0.17, grasas: 0.25, carbohidratos: 0 },
    conejo: { kcal: 1.73, proteinas: 0.20, grasas: 0.10, carbohidratos: 0 },
    sardina: { kcal: 2.08, proteinas: 0.25, grasas: 0.11, carbohidratos: 0 },
    caballa: { kcal: 2.05, proteinas: 0.19, grasas: 0.14, carbohidratos: 0 },
    salmon: { kcal: 2.06, proteinas: 0.25, grasas: 0.13, carbohidratos: 0 },
    higado_pollo: { kcal: 1.67, proteinas: 0.17, grasas: 0.05, carbohidratos: 0.04 },
    higado_res: { kcal: 1.65, proteinas: 0.20, grasas: 0.05, carbohidratos: 0.04 },
    rinon_res: { kcal: 1.18, proteinas: 0.17, grasas: 0.05, carbohidratos: 0 },
    corazon_pollo: { kcal: 1.53, proteinas: 0.15, grasas: 0.10, carbohidratos: 0 },
    mollejas: { kcal: 1.56, proteinas: 0.18, grasas: 0.09, carbohidratos: 0 },
    tripa_verde: { kcal: 1.50, proteinas: 0.14, grasas: 0.10, carbohidratos: 0 },
    alitas_pollo: { kcal: 2.22, proteinas: 0.18, grasas: 0.16, carbohidratos: 0 },
    cuellos_pavo: { kcal: 1.80, proteinas: 0.16, grasas: 0.12, carbohidratos: 0 },
    costillas_cordero: { kcal: 2.70, proteinas: 0.15, grasas: 0.23, carbohidratos: 0 },
    carcasa_pollo: { kcal: 1.90, proteinas: 0.14, grasas: 0.14, carbohidratos: 0 },
    patas_pollo: { kcal: 2.14, proteinas: 0.19, grasas: 0.15, carbohidratos: 0 },
    calabaza: { kcal: 0.26, proteinas: 0.01, grasas: 0, carbohidratos: 0.06 },
    zanahoria: { kcal: 0.41, proteinas: 0.01, grasas: 0, carbohidratos: 0.10 },
    esparragos: { kcal: 0.20, proteinas: 0.02, grasas: 0, carbohidratos: 0.04 },
    pepino: { kcal: 0.15, proteinas: 0.01, grasas: 0, carbohidratos: 0.03 },
    espinaca: { kcal: 0.23, proteinas: 0.03, grasas: 0, carbohidratos: 0.04 },
    brocoli: { kcal: 0.34, proteinas: 0.03, grasas: 0, carbohidratos: 0.07 },
    manzana: { kcal: 0.52, proteinas: 0, grasas: 0, carbohidratos: 0.14 },
    pera: { kcal: 0.57, proteinas: 0, grasas: 0, carbohidratos: 0.15 },
    arandanos: { kcal: 0.57, proteinas: 0.01, grasas: 0, carbohidratos: 0.14 },
    aceite_oliva: { kcal: 8.84, proteinas: 0, grasas: 1, carbohidratos: 0 },
    aceite_pescado: { kcal: 9.00, proteinas: 0, grasas: 1, carbohidratos: 0 },
    grasa_pato: { kcal: 8.82, proteinas: 0, grasas: 1, carbohidratos: 0 },
    pienso: { kcal: 3.5, proteinas: 0.25, grasas: 0.15, carbohidratos: 0.45 },
    natural: { kcal: 1.2, proteinas: 0.10, grasas: 0.05, carbohidratos: 0.10 }
};

const ajustes = {
    cachorro_menor_4: 3,
    cachorro_mayor_4: 2,
    adulto: { baja: 1.2, moderada: 1.6, alta: 2 },
    senior: 1.2
};

// pasar palabras a con tildes
function capitalizarCategoria(categoria) {
    const map = {
        'carne': 'Carne',
        'visceras': 'Vísceras',
        'huesos': 'Huesos',
        'verduras': 'Verduras',
        'grasas': 'Grasas',
        'pienso': 'Pienso',
        'natural': 'Natural'
    };
    return map[categoria] || categoria.charAt(0).toUpperCase() + categoria.slice(1);
}

//Formatea nombres de alimentos (por ej: pollo_pechuga a Pechuga de pollo).
function formatearAlimento(alimento) {
    const map = {
        'pollo_pechuga': 'Pechuga de pollo',
        'pollo_muslo': 'Muslo de pollo',
        'pavo': 'Pavo',
        'ternera': 'Ternera',
        'cordero': 'Cordero',
        'conejo': 'Conejo',
        'sardina': 'Sardina',
        'caballa': 'Caballa',
        'salmon': 'Salmón',
        'higado_pollo': 'Hígado de pollo',
        'higado_res': 'Hígado de res',
        'rinon_res': 'Riñón de res',
        'corazon_pollo': 'Corazón de pollo',
        'mollejas': 'Mollejas',
        'tripa_verde': 'Tripa verde',
        'alitas_pollo': 'Alitas de pollo',
        'cuellos_pavo': 'Cuellos de pavo',
        'costillas_cordero': 'Costillas de cordero',
        'carcasa_pollo': 'Carcasa de pollo',
        'patas_pollo': 'Patas de pollo',
        'calabaza': 'Calabaza',
        'zanahoria': 'Zanahoria',
        'esparragos': 'Espárragos',
        'pepino': 'Pepino',
        'espinaca': 'Espinaca',
        'brocoli': 'Brócoli',
        'manzana': 'Manzana',
        'pera': 'Pera',
        'arandanos': 'Arándanos',
        'aceite_oliva': 'Aceite de oliva',
        'aceite_pescado': 'Aceite de pescado',
        'grasa_pato': 'Grasa de pato',
        'pienso': 'Pienso',
        'natural': 'Natural'
    };
    return map[alimento] || alimento.split('_').map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(' ');
}


//al cargar la página, configura el formulario
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('formularioDieta');
    const resultadosDiv = document.getElementById('resultados');
    const descargarPDFBtn = document.getElementById('descargarPDF');
    const contratarPlanBtn = document.getElementById('contratarPlan');
    const alergiaCheckbox = document.getElementById('alergia');
    const alimentosAlergiaSelect = document.getElementById('alimentos_alergia');
    const menuJsonInput = document.getElementById('menu_json');
    const razaSelect = document.getElementById('raza');

    if (!form) {
        console.error('Formulario con ID "formularioDieta" no encontrado');
        return;
    }

    if (!descargarPDFBtn) {
        console.error('Botón con ID "descargarPDF" no encontrado');
    }

    if (!contratarPlanBtn) {
        console.error('Botón con ID "contratarPlan" no encontrado');
    }

    // Carga razas desde API de Dog CEO (https://dog.ceo/dog-api/)
    if (razaSelect) {
        fetch('https://dog.ceo/api/breeds/list/all')
            .then(response => response.json())
            .then(data => {
                razaSelect.innerHTML = '<option value="">Selecciona una raza</option>';
                const breeds = Object.keys(data.message);
                breeds.forEach(breed => {
                    // Capitalizar cada palabra de la raza
                    const formattedBreed = breed
                        .split(/[-\s]/)

                        //hace mayúsculas la primera letra y añade el resto sin cambios
                        .map(word => word.charAt(0).toUpperCase() + word.slice(1))
                        .join(' ');
                    const option = document.createElement('option');
                    option.value = formattedBreed;
                    option.textContent = formattedBreed;
                    razaSelect.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error al cargar razas:', error);
                razaSelect.innerHTML = '<option value="">Error al cargar razas</option>';
            });
    }

    // despliega/pliega el selector de alergias según el checkbox
    if (alergiaCheckbox && alimentosAlergiaSelect) {
        alergiaCheckbox.addEventListener('change', function () {
            alimentosAlergiaSelect.style.display = this.checked ? 'block' : 'none';
        });
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        const rawData = {};
        for (let [key, value] of formData.entries()) {
            rawData[key] = value;
        }
        console.log('Datos crudos del formulario:', rawData);

        const data = {
            mascota_id: formData.get('mascota_id') || null,
            nombre: formData.get('nombre')?.trim() || 'Perro',
            raza: formData.get('raza')?.trim() || '',
            peso: parseFloat(formData.get('peso')),
            categoria_edad: formData.get('categoria_edad')?.trim() || '',
            esterilizado: formData.get('esterilizado') === '1',
            nivel_actividad: formData.get('nivel_actividad')?.trim() || '',
            tipo_dieta: formData.get('tipo_dieta')?.trim() || '',
            condiciones_salud: formData.getAll('condiciones_salud[]'),
            alimentos_alergia: formData.getAll('alimentos_alergia[]'),
        };

        console.log('Datos procesados:', data);

        try {
            //calcula calorías necesarias (energía metabólica)
              if (!formData.get('peso') || isNaN(data.peso) || data.peso <= 0) {
                 throw new Error(`El peso debe ser un número positivo. Valor recibido: ${formData.get('peso') || 'vacío'}`);
            }

            if (!data.categoria_edad ||!['cachorro_menor_4', 'cachorro_mayor_4', 'adulto', 'senior'].includes(data.categoria_edad)) {
                  throw new Error(`Selecciona una categoría de edad válida. Valor recibido: ${data.categoria_edad || 'vacío'}`);
             }

             if (!data.nivel_actividad ||!['baja', 'moderada', 'alta'].includes(data.nivel_actividad)) {
                throw new Error(`Selecciona un nivel de actividad válido. Valor recibido: ${data.nivel_actividad || 'vacío'}`);
            }


             if (!data.tipo_dieta || !['barf', 'cocida', 'mixta_50', 'mixta_70'].includes(data.tipo_dieta)) {
                throw new Error(`Selecciona un tipo de dieta válido. Valor recibido: ${data.tipo_dieta || 'vacío'}`);
            }
            if (!data.raza) {
                throw new Error('Selecciona una raza válida.');
            }

             let energiaMetabolica = 70* Math.pow(data.peso, 0.75) ;
             let factorAjuste = data.categoria_edad === 'adulto' ? ajustes[data.categoria_edad][data.nivel_actividad] : ajustes[data.categoria_edad];
            energiaMetabolica *= factorAjuste;

            let ajustesAplicados =[];
            if (data.condiciones_salud.includes('obesidad')) {
                energiaMetabolica *= 0.8;
                ajustesAplicados.push('Reducción del 20% por obesidad');
            }

            if (data.esterilizado) {
                const gramosIdeales = data.peso * 20;
                const gramosActuales = energiaMetabolica / 2;
                const factorReduccion = gramosIdeales / gramosActuales;
                energiaMetabolica *= factorReduccion;
                ajustesAplicados.push(`Reducción al 2% del peso (${gramosIdeales}g) por esterilización`);
            }

            let dieta = {};
            if (data.tipo_dieta === 'barf' || data.tipo_dieta === 'cocida') {
                dieta = {
                    carne: { kcal: energiaMetabolica * 0.55, gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0 },
                    visceras: { kcal: energiaMetabolica * 0.10, gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0 },
                    huesos: { kcal: energiaMetabolica * 0.125, gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0 },
                    verduras: { kcal: energiaMetabolica * 0.125, gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0 },
                    grasas: {
                        kcal: data.condiciones_salud.includes('obesidad') ? energiaMetabolica * 0.05 : energiaMetabolica * 0.10,
                        gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0
                    }
                };
                if (data.condiciones_salud.includes('renal')) {
                    dieta.carne.kcal = energiaMetabolica * 0.6;
                    delete dieta.huesos;
                }
                if (data.condiciones_salud.includes('diabetes')) {
                    dieta.verduras.kcal = energiaMetabolica * 0.05;
                }
            } else if (data.tipo_dieta === 'mixta_50') {
                dieta = {
                    pienso: { kcal: energiaMetabolica * 0.5, gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0 },
                    natural: { kcal: energiaMetabolica * 0.5, gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0 }
                };
            } else if (data.tipo_dieta === 'mixta_70') {
                dieta = {
                    pienso: { kcal: energiaMetabolica * 0.7, gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0 },
                    natural: { kcal: energiaMetabolica * 0.3, gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0 }
                };
            }

            //genera el menú semanal y guarda en un campo oculto
            const menuSemanal = generarMenuSemanal(dieta, data.condiciones_salud, data.alimentos_alergia, data.tipo_dieta);
            menuJsonInput.value = JSON.stringify(menuSemanal);

            //lo muestra
            mostrarResultados(data.nombre, data.peso, energiaMetabolica, dieta, menuSemanal, ajustesAplicados, data.tipo_dieta, data.raza);

            //saca botónpara contratar plan
            if (descargarPDFBtn) {
                descargarPDFBtn.style.display = 'block';
                descargarPDFBtn.onclick = () => descargarPDF(data.nombre, data.peso, energiaMetabolica, dieta, menuSemanal, ajustesAplicados, data.tipo_dieta, data.raza);
            } else {
                console.warn('No se puede mostrar el botón de descargar PDF porque no se encontró el elemento');
            }

            if (contratarPlanBtn) {
                contratarPlanBtn.style.display = 'block';
            } else {
                console.warn('No se puede mostrar el botón de contratar plan porque no se encontró el elemento');
            }


            //pasar datos a servidor
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json',
                },

            }).then(response => {
                if (!response.ok) {
                      return response.json().then(error => {
                        throw new Error(error.message || `Error en la respuesta del servidor: ${response.statusText}`);
                    });
                }

                return response.json();
            }).then(data => {
                console.log('Respuesta del servidor:', data);
                if (!data.success) {
                    throw new Error(data.message || 'Error al guardar la dieta');
                }
                console.log('Dieta guardada con éxito:', data.dieta_id);
            }).catch(error => {
                console.error('Error en fetch:', error);
                resultadosDiv.innerHTML += `<p class="result-error mt-3">Advertencia: ${error.message}. Por favor, verifica la asociación de la dieta en el perfil.</p>`;
            });

        } catch (error) {
            console.error('Error en validación:', error);
            resultadosDiv.innerHTML = `<p class="result-error">Error: ${error.message}</p>`;
        }
    });
});

//------------------------------------------------------------------
//genera menú semanal con alimentos por día, mañana y tarde
function generarMenuSemanal(dieta, condicionesSalud, alimentosAlergia, tipoDieta) {
    const dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
    const menu = {};
    const opcionesAlimentos = {
        carne: ['pollo_pechuga', 'pollo_muslo', 'pavo', 'ternera', 'cordero', 'conejo', 'sardina', 'caballa', 'salmon'].filter(food => !alimentosAlergia.includes(food)),
        visceras: ['higado_pollo', 'higado_res', 'rinon_res', 'corazon_pollo', 'mollejas', 'tripa_verde'].filter(food => !alimentosAlergia.includes(food)),
        huesos: ['alitas_pollo', 'cuellos_pavo', 'costillas_cordero', 'carcasa_pollo', 'patas_pollo'],
        verduras: ['calabaza', 'zanahoria', 'esparragos', 'pepino', 'espinaca', 'brocoli', 'manzana', 'pera', 'arandanos'],
        grasas: ['aceite_oliva', 'aceite_pescado', 'grasa_pato'],
        pienso: ['pienso'],
        natural: ['natural']
    };

    dias.forEach(dia => {
        menu[dia] = { manana: {}, tarde: {} };
        for (let categoria in dieta) {
            const listaAlimentos = opcionesAlimentos[categoria] || [];
            if (listaAlimentos.length === 0) continue;
            const alimentoManana = listaAlimentos[Math.floor(Math.random() * listaAlimentos.length)] || listaAlimentos[0];
            const alimentoTarde = listaAlimentos[Math.floor(Math.random() * listaAlimentos.length)] || listaAlimentos[0];
            const datosManana = alimentos[alimentoManana];
            const datosTarde = alimentos[alimentoTarde];

            const gramosTotales = dieta[categoria].kcal / ((datosManana.kcal + datosTarde.kcal) / 2);
            const gramosManana = gramosTotales / 2;
            const gramosTarde = gramosTotales / 2;

            dieta[categoria].gramos = gramosTotales;
            dieta[categoria].proteinas = (gramosManana * datosManana.proteinas) + (gramosTarde * datosTarde.proteinas);
            dieta[categoria].grasas = (gramosManana * datosManana.grasas) + (gramosTarde * datosTarde.grasas);
            dieta[categoria].carbohidratos = (gramosManana * datosManana.carbohidratos) + (gramosTarde * datosTarde.carbohidratos);

            const etiquetaManana = tipoDieta === 'cocida' ? `${formatearAlimento(alimentoManana)} (cocido)` : formatearAlimento(alimentoManana);
            const etiquetaTarde = tipoDieta === 'cocida' ? `${formatearAlimento(alimentoTarde)} (cocido)` : formatearAlimento(alimentoTarde);
            menu[dia].manana[categoria] = `${Math.round(gramosManana)}g ${etiquetaManana}`;
            menu[dia].tarde[categoria] = `${Math.round(gramosTarde)}g ${etiquetaTarde}`;
        }
    });
    return menu;
}

////muestra los resultados de la dieta en la página con tablas y menús (html en el propio js)

function mostrarResultados(nombrePerro, peso, energiaMetabolica, dieta, menuSemanal, ajustesAplicados, tipoDieta, raza) {
    const divResultados = document.getElementById('resultados');
    let html = ` <article class="card result-card">
            <h2 class="result-title">Dieta para ${nombrePerro}</h2>
            <div class="result-card-inner">
                <h3 class="result-subtitle">Resumen</h3>
                <ul class="result-list">
                    <li><strong>Nombre:</strong> ${nombrePerro}</li>
                    <li><strong>Raza:</strong> ${raza}</li>
                    <li><strong>Peso:</strong> ${peso} kg</li>
                    <li><strong>Tipo de dieta: </strong> ${tipoDieta.charAt(0).toUpperCase() + tipoDieta.slice(1)}</li>
                    <li><strong>Calorías diarias: </strong> ${Math.round(energiaMetabolica)} kcal</li>
                    ${ajustesAplicados.length > 0 ? `<li><strong>Ajustes aplicados:</strong> ${ajustesAplicados.join(', ')}</li>` : ''}
                </ul>
            </div>
            <div class="result-card-inner">
                <h3 class="result-subtitle">Distribución de Macronutrientes</h3>
                <table class="result-table">
                    <thead>

                        <tr>
                            <th>Categoría</th>
                            <th>kcal</th>
                            <th>g</th>
                            <th>Prot.</th>
                            <th>Grasas</th>
                            <th>CH</th>
                        </tr>
                    </thead>
                    <tbody> `;

    for (let categoria in dieta) {
        html += ` <tr>
                <td>${capitalizarCategoria(categoria)}</td>
                <td>${Math.round(dieta[categoria].kcal)}</td>
                <td>${Math.round(dieta[categoria].gramos)}</td>
                <td>${Math.round(dieta[categoria].proteinas)}</td>
                <td>${Math.round(dieta[categoria].grasas)}</td>
                <td>${Math.round(dieta[categoria].carbohidratos)}</td>
            </tr>  `;
    }

    html += ` </tbody>
                </table>
            </div>
            <div class="result-section">
                <h3 class="result-subtitle">Menú Semanal</h3>
                <div class="menu-weekly"> `;

    const dias = Object.keys(menuSemanal);
    dias.forEach((dia) => {
        html += `
            <div class="menu-day">
                <h4 class="menu-day-title">${dia}</h4>
                <table class="menu-table">
                    <thead>
                        <tr>
                            <th>Categoría</th>
                            <th>Mañana</th>
                            <th>Tarde</th>
                        </tr>
                    </thead>
                    <tbody> `;
        const categorias = [...new Set([
            ...Object.keys(menuSemanal[dia].manana),
            ...Object.keys(menuSemanal[dia].tarde)
        ])];
        categorias.forEach((cat) => {
            html += ` <tr>
                    <td>${capitalizarCategoria(cat)}</td>
                    <td>${menuSemanal[dia].manana[cat] || '-'}</td>
                    <td>${menuSemanal[dia].tarde[cat] || '-'}</td>
                </tr> `;
        });
        html += `   </tbody>
                </table>
            </div> `;
    });

    html += ` </div>
            </div>
        </article> `;

    divResultados.innerHTML = html;
}

//genera y descarga el PDF con la dieta personalizada (html en este js)
function descargarPDF(nombrePerro, peso, energiaMetabolica, dieta, menuSemanal, ajustesAplicados, tipoDieta, raza) {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    const pageWidth = doc.internal.pageSize.getWidth();
    const pageHeight = doc.internal.pageSize.getHeight();
    const margin = 15;
    let y = margin;

    //fondo blanco
    doc.setFillColor(255, 255, 255);
    doc.rect(0, 0, pageWidth, pageHeight, 'F');

    // loggo
    const logoUrl = '/images/logo-barfco.png';
    const logoWidth = 30;
    const logoHeight = 30;
    doc.addImage(logoUrl, 'PNG', margin, margin, logoWidth, logoHeight, undefined, 'NONE');

    //Fecha
    doc.setFontSize(10);
    doc.setTextColor(80, 80, 80);
    doc.setFont('Helvetica', 'normal');
    doc.text(`Generado el ${new Date().toLocaleDateString('es-ES')}`, pageWidth - margin, margin + 7, { align: 'right' });

    //título (debajo del logo)
    doc.setFontSize(22);
    doc.setTextColor(8, 54, 48);
    doc.setFont('Helvetica', 'bold');
    doc.text(`Dieta para ${nombrePerro}`, pageWidth / 2, margin + logoHeight + 15, { align: 'center' });
    y = margin + logoHeight + 25;

    //resumen
    doc.setFontSize(16);
    doc.setTextColor(8, 54, 48);
    doc.setFont('Helvetica', 'bold');
    doc.text('Resumen', margin, y);
    y += 10;
    doc.setFontSize(12);
    doc.setTextColor(80, 80, 80);
    const bulletColor = [8, 54, 48];
    const bullet = '•';
    const bulletOffset = 5;
    const items = [
        { label: 'Nombre: ', value: nombrePerro },
        { label: 'Raza: ', value: raza },
        { label: 'Peso: ', value: `${peso} kg` },
        { label: 'Tipo de dieta: ', value: tipoDieta.charAt(0).toUpperCase() + tipoDieta.slice(1) },
        { label: 'Calorías diarias: ', value: `${Math.round(energiaMetabolica)} kcal` },
    ];
    if (ajustesAplicados.length > 0) {
        items.push({ label: 'Ajustes aplicados: ', value: ajustesAplicados.join(', ') });
    }
    items.forEach(item => {
        doc.setTextColor(...bulletColor);
        doc.text(bullet, margin, y);
        doc.setTextColor(8, 54, 48);
        doc.setFont('Helvetica', 'bold');
        doc.text(item.label, margin + bulletOffset, y);
        doc.setTextColor(80, 80, 80);
        doc.setFont('Helvetica', 'normal');
        const labelWidth = doc.getTextWidth(item.label) + 2;
        const lines = doc.splitTextToSize(item.value, pageWidth - margin - labelWidth - bulletOffset - 10);
        lines.forEach((line, index) => {
            doc.text(line, margin + bulletOffset + labelWidth, y);
            y += 8;
        });
    });
    y += 10;

    // línea
    doc.setDrawColor(8, 54, 48);
    doc.setLineWidth(0.3);
    doc.line(margin, y, pageWidth - margin, y);
    y += 15;

    //tabla de macronutrientes
    doc.setFontSize(16);
    doc.setTextColor(8, 54, 48);
    doc.setFont('Helvetica', 'bold');
    doc.text('Distribución de Macronutrientes', margin, y);
    y += 10;

    // tabla
    const tableHeight = 10 + 10 * Object.keys(dieta).length;
    doc.setFillColor(255, 255, 255);
    doc.roundedRect(margin, y, pageWidth - 2 * margin, tableHeight, 8, 8, 'F');

    // cabecera
    doc.setFillColor(224, 67, 18);
    doc.rect(margin, y, pageWidth - 2 * margin, 10, 'F');
    doc.setFontSize(10);
    doc.setTextColor(255, 255, 255);
    doc.setFont('Helvetica', 'bold');
    doc.text('Categoría', margin + 5, y + 7);
    doc.text('kcal', margin + 50, y + 7);
    doc.text('g', margin + 70, y + 7);
    doc.text('Prot.', margin + 90, y + 7);
    doc.text('Grasas', margin + 110, y + 7);
    doc.text('CH', margin + 130, y + 7);
    y += 10;

    //filas
    doc.setFont('Helvetica', 'normal');
    doc.setTextColor(80, 80, 80);
    let rowIndex = 0;
    for (let categoria in dieta) {
        if (rowIndex % 2 === 0) {
            doc.setFillColor(240, 240, 240);
            doc.rect(margin, y, pageWidth - 2 * margin, 10, 'F');
        }
        doc.text(capitalizarCategoria(categoria), margin + 5, y + 7);
        doc.text(Math.round(dieta[categoria].kcal).toString(), margin + 50, y + 7);
        doc.text(Math.round(dieta[categoria].gramos).toString(), margin + 70, y + 7);
        doc.text(Math.round(dieta[categoria].proteinas).toString(), margin + 90, y + 7);
        doc.text(Math.round(dieta[categoria].grasas).toString(), margin + 110, y + 7);
        doc.text(Math.round(dieta[categoria].carbohidratos).toString(), margin + 130, y + 7);
        y += 10;
        rowIndex++;
        if (y > pageHeight - margin - 20) {
            doc.addPage();
            doc.setFillColor(255, 255, 255);
            doc.rect(0, 0, pageWidth, pageHeight, 'F');
            y = margin;
        }
    }
    y += 10;

//linea
doc.setDrawColor(8, 54, 48);
    doc.setLineWidth(0.3);
    doc.line(margin, y, pageWidth - margin, y);
    y += 15;

    // menú semanal
    doc.setFontSize(16);
    doc.setTextColor(8, 54, 48);
    doc.setFont('Helvetica', 'bold');
    doc.text('Menú Semanal', margin, y);
    y += 10;

    for (let dia in menuSemanal) {
        if (y > pageHeight - margin - 60) {
            doc.addPage();
            doc.setFillColor(255, 255, 255);
            doc.rect(0, 0, pageWidth, pageHeight, 'F');
            y = margin;
        }
        doc.setFontSize(12);
        doc.setTextColor(8, 54, 48);
        doc.setFont('Helvetica', 'bold');
        doc.text(dia, margin, y);
        y += 10;

        // tabla con bordes redondeados
        const categorias = [...new Set([
            ...Object.keys(menuSemanal[dia].manana),
            ...Object.keys(menuSemanal[dia].tarde)
        ])];
        const tableHeightMenu = 10 + 10 * categorias.length;
        doc.setFillColor(255, 255, 255);
        doc.roundedRect(margin, y, pageWidth - 2 * margin, tableHeightMenu, 8, 8, 'F');

        // cabecera (verde )
        doc.setFillColor(8, 54, 48);
        doc.rect(margin, y, pageWidth - 2 * margin, 10, 'F');
        doc.setFontSize(10);
        doc.setTextColor(255, 255, 255);
        doc.setFont('Helvetica', 'bold');
        doc.text('Categoría', margin + 5, y + 7);
        doc.text('Mañana', margin + 60, y + 7);
        doc.text('Tarde', margin + 115, y + 7);
        y += 10;

        // filas
        doc.setFont('Helvetica', 'normal');
        doc.setTextColor(80, 80, 80);
        categorias.forEach((cat, index) => {
            if (index % 2 === 0) {
                doc.setFillColor(240, 240, 240);
                doc.rect(margin, y, pageWidth - 2 * margin, 10, 'F');
            }
            doc.text(capitalizarCategoria(cat), margin + 5, y + 7);
            doc.text(menuSemanal[dia].manana[cat] || '-', margin + 60, y + 7);
            doc.text(menuSemanal[dia].tarde[cat] || '-', margin + 115, y + 7);
            y += 10;
            if (y > pageHeight - margin - 20) {
                doc.addPage();
                doc.setFillColor(255, 255, 255);
                doc.rect(0, 0, pageWidth, pageHeight, 'F');
                y = margin;
            }
        });
        y += 25;
    }

    // footer
    doc.setFontSize(8);
    doc.setTextColor(80, 80, 80);
    doc.setFont('Helvetica', 'normal');
    doc.text('Calculadora de Dietas Caninas - Todos los derechos reservados', pageWidth / 2, pageHeight - margin, { align: 'center' });

    doc.save(`Dieta_${nombrePerro}_${new Date().toISOString().split('T')[0]}.pdf`);
}
