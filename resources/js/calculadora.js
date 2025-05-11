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

    if (alergiaCheckbox && alimentosAlergiaSelect) {
        alergiaCheckbox.addEventListener('change', function () {
            alimentosAlergiaSelect.style.display = this.checked ? 'block' : 'none';
        });
    }

    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(form);
            const data = {
                mascota_id: formData.get('mascota_id'),
                nombre: formData.get('nombre')?.trim(),
                peso: parseFloat(formData.get('peso')),
                categoria_edad: formData.get('categoria_edad'),
                esterilizado: formData.get('esterilizado') === '1',
                nivel_actividad: formData.get('nivel_actividad'),
                tipo_dieta: formData.get('tipo_dieta'),
                condiciones_salud: formData.getAll('condiciones_salud[]'),
                alimentos_alergia: formData.getAll('alimentos_alergia[]'),
            };

            console.log('Datos del formulario:', data); // Depuración

            try {
                if (!data.nombre || data.nombre === '') {
                    throw new Error('Ingresa el nombre del perro.');
                }
                if (isNaN(data.peso) || data.peso <= 0) {
                    throw new Error('El peso debe ser un número positivo.');
                }
                if (!data.categoria_edad) {
                    throw new Error('Selecciona la categoría de edad.');
                }
                if (!data.nivel_actividad) {
                    throw new Error('Selecciona el nivel de actividad.');
                }
                if (!data.tipo_dieta) {
                    throw new Error('Selecciona el tipo de dieta.');
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

                // Mostrar resultados
                mostrarResultados(data.nombre, data.peso, energiaMetabolica, dieta, menuSemanal, ajustesAplicados, data.tipo_dieta);

                // Habilitar botón de descarga de PDF
                descargarPDFBtn.style.display = 'block';
                descargarPDFBtn.onclick = () => descargarPDF(data.nombre, energiaMetabolica, menuSemanal);

                // Enviar el formulario al servidor
                fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json',
                    },
                }).then(response => {
                    console.log('Respuesta del servidor:', response); // Depuración
                    return response.json().then(data => ({ data, status: response.status, ok: response.ok }));
                }).then(({ data, status, ok }) => {
                    if (!ok) {
                        throw new Error(data.error || 'Error en la respuesta del servidor');
                    }
                    if (data.success && data.redirect) {
                        window.location.href = data.redirect;
                    }
                }).catch(error => {
                    console.error('Error en fetch:', error);
                    // Añadir mensaje de advertencia sin sobrescribir el resumen
                    resultadosDiv.innerHTML += `<p class="text-danger mt-3">Advertencia: ${error.message}. Por favor, verifica la asociación de la dieta en el perfil.</p>`;
                });
            } catch (error) {
                console.error('Error en validación:', error);
                resultadosDiv.innerHTML = `<p class="text-danger">Error: ${error.message}</p>`;
            }
        });
    }
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

function descargarPDF(nombrePerro, energiaMetabolica, menuSemanal) {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();
    doc.setFontSize(12);
    doc.text(`Dieta para ${nombrePerro} - Energía: ${Math.round(energiaMetabolica)} kcal/día`, 10, 10);
    let y = 20;
    for (let dia in menuSemanal) {
        doc.text(`${dia}`, 10, y);
        y += 10;
        doc.text(`Mañana:`, 10, y);
        Object.entries(menuSemanal[dia].manana).forEach(([cat, val]) => {
            y += 7;
            doc.text(`${cat}: ${val}`, 15, y);
        });
        y += 10;
        doc.text(`Tarde:`, 10, y);
        Object.entries(menuSemanal[dia].tarde).forEach(([cat, val]) => {
            y += 7;
            doc.text(`${cat}: ${val}`, 15, y);
        });
        y += 15;
        if (y > 270) {
            doc.addPage();
            y = 10;
        }
    }
    doc.save(`Dieta_${nombrePerro}_${new Date().toISOString().split('T')[0]}.pdf`);
}
