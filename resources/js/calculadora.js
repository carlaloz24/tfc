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

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('formularioDieta');
    const resultadosDiv = document.getElementById('resultados');
    const descargarPDFBtn = document.getElementById('descargarPDF');
    const alergiaCheckbox = document.getElementById('alergia');
    const alimentosAlergiaSelect = document.getElementById('alimentos_alergia');
    const menuJsonInput = document.getElementById('menu_json');

    if (!form) {
        console.error('Formulario con ID "formularioDieta" no encontrado');
        return;
    }

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
        console.log('Datos crudos del formulario:', rawData); // Depuración

        const data = {
            mascota_id: formData.get('mascota_id') || null,
            nombre: formData.get('nombre')?.trim() || 'Perro',
            peso: parseFloat(formData.get('peso')),
            categoria_edad: formData.get('categoria_edad')?.trim() || '',
            esterilizado: formData.get('esterilizado') === '1',
            nivel_actividad: formData.get('nivel_actividad')?.trim() || '',
            tipo_dieta: formData.get('tipo_dieta')?.trim() || '',
            condiciones_salud: formData.getAll('condiciones_salud[]'),
            alimentos_alergia: formData.getAll('alimentos_alergia[]'),
        };

        console.log('Datos procesados:', data); // Depuración

        try {
            // Validaciones
            if (!formData.get('peso') || isNaN(data.peso) || data.peso <= 0) {
                throw new Error(`El peso debe ser un número positivo. Valor recibido: ${formData.get('peso') || 'vacío'}`);
            }
            if (!data.categoria_edad || !['cachorro_menor_4', 'cachorro_mayor_4', 'adulto', 'senior'].includes(data.categoria_edad)) {
                throw new Error(`Selecciona una categoría de edad válida. Valor recibido: ${data.categoria_edad || 'vacío'}`);
            }
            if (!data.nivel_actividad || !['baja', 'moderada', 'alta'].includes(data.nivel_actividad)) {
                throw new Error(`Selecciona un nivel de actividad válido. Valor recibido: ${data.nivel_actividad || 'vacío'}`);
            }
            if (!data.tipo_dieta || !['barf', 'cocida', 'mixta_50', 'mixta_70'].includes(data.tipo_dieta)) {
                throw new Error(`Selecciona un tipo de dieta válido. Valor recibido: ${data.tipo_dieta || 'vacío'}`);
            }

            // Calcular energía metabolizable
            let energiaMetabolica = 70 * Math.pow(data.peso, 0.75);
            let factorAjuste = data.categoria_edad === 'adulto' ? ajustes[data.categoria_edad][data.nivel_actividad] : ajustes[data.categoria_edad];
            energiaMetabolica *= factorAjuste;

            let ajustesAplicados = [];
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

            // Generar dieta
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

            // Generar menú semanal
            const menuSemanal = generarMenuSemanal(dieta, data.condiciones_salud, data.alimentos_alergia, data.tipo_dieta);

            // Actualizar menu_json en el formulario
            menuJsonInput.value = JSON.stringify(menuSemanal);

            // Mostrar resultados en la interfaz
            mostrarResultados(data.nombre, data.peso, energiaMetabolica, dieta, menuSemanal, ajustesAplicados, data.tipo_dieta);

            // Habilitar botón de descarga de PDF
            descargarPDFBtn.style.display = 'block';
            descargarPDFBtn.onclick = () => descargarPDF(data.nombre, data.peso, energiaMetabolica, dieta, menuSemanal, ajustesAplicados, data.tipo_dieta);

            // Enviar el formulario al servidor
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
                resultadosDiv.innerHTML += `<p class="text-danger mt-3">Advertencia: ${error.message}. Por favor, verifica la asociación de la dieta en el perfil.</p>`;
            });
        } catch (error) {
            console.error('Error en validación:', error);
            resultadosDiv.innerHTML = `<p class="text-danger">Error: ${error.message}</p>`;
        }
    });
});

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

            const etiquetaManana = tipoDieta === 'cocida' ? `${alimentoManana} (cocido)` : alimentoManana;
            const etiquetaTarde = tipoDieta === 'cocida' ? `${alimentoTarde} (cocido)` : alimentoTarde;
            menu[dia].manana[categoria] = `${Math.round(gramosManana)}g ${etiquetaManana}`;
            menu[dia].tarde[categoria] = `${Math.round(gramosTarde)}g ${etiquetaTarde}`;
        }
        if (condicionesSalud.includes('artrosis')) {
            menu[dia].manana.suplemento = '1g Omega-3';
            menu[dia].tarde.suplemento = '1g Omega-3';
        }
    });
    return menu;
}

function mostrarResultados(nombrePerro, peso, energiaMetabolica, dieta, menuSemanal, ajustesAplicados, tipoDieta) {
    const divResultados = document.getElementById('resultados');
    let html = `
        <section class="mb-4">
            <h2 class="mb-3">Dieta para ${nombrePerro}</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Resumen</h3>
                            <ul class="list-unstyled">
                                <li><strong>Nombre:</strong> ${nombrePerro}</li>
                                <li><strong>Peso:</strong> ${peso} kg</li>
                                <li><strong>Tipo de dieta:</strong> ${tipoDieta}</li>
                                <li><strong>Calorías diarias:</strong> ${Math.round(energiaMetabolica)} kcal</li>
                                ${ajustesAplicados.length > 0 ? `<li><strong>Ajustes aplicados:</strong> ${ajustesAplicados.join(', ')}</li>` : ''}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Distribución de Macronutrientes</h3>
                            <table class="table table-sm table-bordered mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Categoría</th>
                                        <th>kcal</th>
                                        <th>g</th>
                                        <th>Prot.</th>
                                        <th>Grasas</th>
                                        <th>CH</th>
                                    </tr>
                                </thead>
                                <tbody>
    `;

    for (let categoria in dieta) {
        html += `
            <tr>
                <td>${categoria}</td>
                <td>${Math.round(dieta[categoria].kcal)}</td>
                <td>${Math.round(dieta[categoria].gramos)}</td>
                <td>${Math.round(dieta[categoria].proteinas)}</td>
                <td>${Math.round(dieta[categoria].grasas)}</td>
                <td>${Math.round(dieta[categoria].carbohidratos)}</td>
            </tr>
        `;
    }

    html += `
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h3>Menú Semanal</h3>
            <div class="accordion" id="acordeonMenuSemanal">
    `;

    const dias = Object.keys(menuSemanal);
    dias.forEach((dia, indice) => {
        html += `
            <div class="accordion-item">
                <h2 class="accordion-header" id="encabezado${indice}">
                    <button class="accordion-button ${indice === 0 ? '' : 'collapsed'}" type="button" data-bs-toggle="collapse" data-bs-target="#colapso${indice}" aria-expanded="${indice === 0}" aria-controls="colapso${indice}">
                        ${dia}
                    </button>
                </h2>
                <div id="colapso${indice}" class="accordion-collapse collapse ${indice === 0 ? 'show' : ''}" aria-labelledby="encabezado${indice}" data-bs-parent="#acordeonMenuSemanal">
                    <div class="accordion-body">
                        <h4>Mañana</h4>
                        <ul class="list-group mb-3">
                            ${Object.entries(menuSemanal[dia].manana).map(([cat, val]) => `<li class="list-group-item"><strong>${cat}:</strong> ${val}</li>`).join('')}
                        </ul>
                        <h4>Tarde</h4>
                        <ul class="list-group">
                            ${Object.entries(menuSemanal[dia].tarde).map(([cat, val]) => `<li class="list-group-item"><strong>${cat}:</strong> ${val}</li>`).join('')}
                        </ul>
                    </div>
                </div>
            </div>
        `;
    });

    html += `
            </div>
        </section>
    `;

    divResultados.innerHTML = html;
}

function descargarPDF(nombrePerro, peso, energiaMetabolica, dieta, menuSemanal, ajustesAplicados, tipoDieta) {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    // Configuración inicial
    const pageWidth = doc.internal.pageSize.getWidth();
    const pageHeight = doc.internal.pageSize.getHeight();
    const margin = 10;
    let y = margin;

    // Fondo general (similar a .main-container y .second-background)
    doc.setFillColor(239, 238, 235); // #efeeeb
    doc.rect(0, 0, pageWidth, pageHeight, 'F');

    // Encabezado (similar a .hero)
    doc.setFillColor(239, 238, 235); // #efeeeb
    doc.roundedRect(margin, y, pageWidth - 2 * margin, 50, 15, 15, 'F');
    doc.setFontSize(24);
    doc.setTextColor(30, 30, 30); // #1e1e1e
    doc.setFont('helvetica', 'bold'); // Aproximamos 'Inter'
    doc.text('Dieta Canina Personalizada', pageWidth / 2, y + 20, { align: 'center' });
    doc.setFontSize(12);
    doc.setTextColor(133, 133, 133); // #858585
    doc.setFont('helvetica', 'normal');
    doc.text(`Generado el ${new Date().toLocaleDateString()}`, pageWidth - margin - 5, y + 35, { align: 'right' });
    y += 60;

    // Espacio para logo (similar a .card)
    doc.setFillColor(255, 255, 255); // #ffffff
    doc.roundedRect(margin + 10, y, 50, 30, 10, 10, 'F');
    doc.setDrawColor(211, 211, 211); // #d3d3d3
    doc.roundedRect(margin + 10, y, 50, 30, 10, 10, 'D');
    doc.setTextColor(133, 133, 133);
    doc.setFontSize(10);
    doc.text('Espacio para Logo', margin + 35, y + 15, { align: 'center' });
    y += 40;

    // Tarjeta de resumen (similar a .card)
    doc.setFillColor(255, 255, 255); // #ffffff
    doc.roundedRect(margin, y, pageWidth - 2 * margin, 80, 15, 15, 'F');
    doc.setDrawColor(211, 211, 211); // #d3d3d3
    doc.roundedRect(margin, y, pageWidth - 2 * margin, 80, 15, 15, 'D');
    doc.setFontSize(16);
    doc.setTextColor(30, 30, 30); // #1e1e1e
    doc.setFont('helvetica', 'bold');
    doc.text(`Dieta para ${nombrePerro}`, margin + 10, y + 15);
    doc.setFontSize(12);
    doc.setTextColor(133, 133, 133); // #858585
    doc.setFont('helvetica', 'normal');
    doc.text(`Peso: ${peso} kg`, margin + 10, y + 30);
    doc.text(`Tipo de dieta: ${tipoDieta}`, margin + 10, y + 40);
    doc.text(`Calorías diarias: ${Math.round(energiaMetabolica)} kcal`, margin + 10, y + 50);
    if (ajustesAplicados.length > 0) {
        doc.text(`Ajustes aplicados: ${ajustesAplicados.join(', ')}`, margin + 10, y + 60);
    }
    y += 90;

    // Tabla de macronutrientes (similar a .plans-table)
    doc.setFillColor(255, 255, 255); // #ffffff
    doc.roundedRect(margin, y, pageWidth - 2 * margin, 20 + 10 * Object.keys(dieta).length, 15, 15, 'F');
    doc.setDrawColor(211, 211, 211); // #d3d3d3
    doc.roundedRect(margin, y, pageWidth - 2 * margin, 20 + 10 * Object.keys(dieta).length, 15, 15, 'D');
    doc.setFontSize(14);
    doc.setTextColor(30, 30, 30); // #1e1e1e
    doc.setFont('helvetica', 'bold');
    doc.text('Distribución de Macronutrientes', margin + 10, y + 10);
    y += 20;

    // Encabezados de la tabla
    doc.setFillColor(8, 54, 48); // #083630
    doc.roundedRect(margin + 5, y - 5, pageWidth - 2 * margin - 10, 10, 5, 5, 'F');
    doc.setFontSize(10);
    doc.setTextColor(255, 255, 255); // Blanco
    doc.text('Categoría', margin + 10, y);
    doc.text('kcal', margin + 50, y);
    doc.text('g', margin + 70, y);
    doc.text('Prot.', margin + 90, y);
    doc.text('Grasas', margin + 110, y);
    doc.text('CH', margin + 130, y);
    y += 10;

    // Filas de la tabla
    doc.setFont('helvetica', 'normal');
    doc.setTextColor(133, 133, 133); // #858585
    let rowIndex = 0;
    for (let categoria in dieta) {
        if (rowIndex % 2 === 0) {
            doc.setFillColor(239, 238, 235); // #efeeeb
            doc.rect(margin + 5, y - 5, pageWidth - 2 * margin - 10, 10, 'F');
        }
        doc.text(categoria, margin + 10, y);
        doc.text(Math.round(dieta[categoria].kcal).toString(), margin + 50, y);
        doc.text(Math.round(dieta[categoria].gramos).toString(), margin + 70, y);
        doc.text(Math.round(dieta[categoria].proteinas).toString(), margin + 90, y);
        doc.text(Math.round(dieta[categoria].grasas).toString(), margin + 110, y);
        doc.text(Math.round(dieta[categoria].carbohidratos).toString(), margin + 130, y);
        y += 10;
        rowIndex++;
        if (y > pageHeight - margin - 20) {
            doc.addPage();
            doc.setFillColor(239, 238, 235); // #efeeeb
            doc.rect(0, 0, pageWidth, pageHeight, 'F');
            y = margin;
        }
    }
    y += 10;

    // Menú semanal (similar a .card con accordion)
    doc.setFillColor(255, 255, 255); // #ffffff
    doc.roundedRect(margin, y, pageWidth - 2 * margin, 20, 15, 15, 'F');
    doc.setDrawColor(211, 211, 211); // #d3d3d3
    doc.roundedRect(margin, y, pageWidth - 2 * margin, 20, 15, 15, 'D');
    doc.setFontSize(14);
    doc.setTextColor(30, 30, 30); // #1e1e1e
    doc.setFont('helvetica', 'bold');
    doc.text('Menú Semanal', margin + 10, y + 10);
    y += 30;

    for (

        let dia in menuSemanal) {
        if (y > pageHeight - margin - 60) {
            doc.addPage();
            doc.setFillColor(239, 238, 235); // #efeeeb
            doc.rect(0, 0, pageWidth, pageHeight, 'F');
            y = margin;
        }
        doc.setFillColor(255, 255, 255); // #ffffff
        doc.roundedRect(margin, y, pageWidth - 2 * margin, 40 + 12 * (Object.keys(menuSemanal[dia].manana).length + Object.keys(menuSemanal[dia].tarde).length), 15, 15, 'F');
        doc.setDrawColor(211, 211, 211); // #d3d3d3
        doc.roundedRect(margin, y, pageWidth - 2 * margin, 40 + 12 * (Object.keys(menuSemanal[dia].manana).length + Object.keys(menuSemanal[dia].tarde).length), 15, 15, 'D');
        doc.setFontSize(12);
        doc.setTextColor(30, 30, 30); // #1e1e1e
        doc.setFont('helvetica', 'bold');
        doc.text(dia, margin + 10, y + 10);
        y += 20;

        doc.setFontSize(10);
        doc.setTextColor(133, 133, 133); // #858585
        doc.setFont('helvetica', 'normal');
        doc.text('Mañana:', margin + 15, y);
        y += 7;
        Object.entries(menuSemanal[dia].manana).forEach(([cat, val]) => {
            doc.text(`${cat}: ${val}`, margin + 20, y);
            y += 6;
        });

        y += 5;
        doc.text('Tarde:', margin + 15, y);
        y += 7;
        Object.entries(menuSemanal[dia].tarde).forEach(([cat, val]) => {
            doc.text(`${cat}: ${val}`, margin + 20, y);
            y += 6;
        });
        y += 15;

        if (y > pageHeight - margin - 20) {
            doc.addPage();
            doc.setFillColor(239, 238, 235); // #efeeeb
            doc.rect(0, 0, pageWidth, pageHeight, 'F');
            y = margin;
        }
    }

    // Pie de página
    doc.setFontSize(8);
    doc.setTextColor(133, 133, 133); // #858585
    doc.text('Calculadora de Dietas Caninas - Todos los derechos reservados', pageWidth / 2, pageHeight - margin, { align: 'center' });

    doc.save(`Dieta_${nombrePerro}_${new Date().toISOString().split('T')[0]}.pdf`);
}
