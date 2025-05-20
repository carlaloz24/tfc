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

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('formularioDieta');
    const resultadosDiv = document.getElementById('resultados');
    const descargarPDFBtn = document.getElementById('descargarPDF');
    const menuJsonInput = document.getElementById('menu_json');

    if (!form) {
        console.error('Formulario con ID "formularioDieta" no encontrado');
        return;
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(form);
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

        try {
            if (!formData.get('peso') || isNaN(data.peso) || data.peso <= 0) {
                throw new Error('El peso debe ser un número positivo.');
            }
            if (!data.categoria_edad || !['cachorro_menor_4', 'cachorro_mayor_4', 'adulto', 'senior'].includes(data.categoria_edad)) {
                throw new Error('Selecciona una categoría de edad válida.');
            }
            if (!data.nivel_actividad || !['baja', 'moderada', 'alta'].includes(data.nivel_actividad)) {
                throw new Error('Selecciona un nivel de actividad válido.');
            }
            if (!data.tipo_dieta || !['barf', 'cocida', 'mixta_50', 'mixta_70'].includes(data.tipo_dieta)) {
                throw new Error('Selecciona un tipo de dieta válido.');
            }
            if (!data.nombre) {
                throw new Error('El nombre es obligatorio.');
            }

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

            const menuSemanal = generarMenuSemanal(dieta, data.condiciones_salud, data.alimentos_alergia, data.tipo_dieta);
            if (!menuSemanal || Object.keys(menuSemanal).length === 0) {
                throw new Error('No se pudo generar el menú semanal.');
            }
            menuJsonInput.value = JSON.stringify(menuSemanal);

            mostrarResultados(data.nombre, data.peso, energiaMetabolica, dieta, menuSemanal, ajustesAplicados, data.tipo_dieta);

            formData.set('menu_json', JSON.stringify(menuSemanal));

            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
            if (!csrfToken) {
                throw new Error('No se encontró el token CSRF.');
            }

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
            }).then(response => {
                if (!response.ok) {
                    return response.json().then(error => { throw new Error(error.error || 'Error en el servidor'); });
                }
                return response.json();
            }).then(data => {
                if (data.success) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (descargarPDFBtn && data.dieta_id) {
                            descargarPDFBtn.dataset.dietaId = data.dieta_id;
                            descargarPDFBtn.style.display = 'block';
                            descargarPDFBtn.onclick = () => {
                                const dietaId = descargarPDFBtn.dataset.dietaId;
                                if (dietaId) {
                                    window.location.href = `/calculadora/download/${dietaId}`;
                                } else {
                                    resultadosDiv.innerHTML = `<p class="result-error">Error: No se encontró el ID de la dieta.</p>`;
                                }
                            };
                        }
                    }
                } else {
                    throw new Error(data.error || 'Error al guardar la dieta');
                }
            }).catch(error => {
                resultadosDiv.innerHTML = `<p class="result-error">Error: ${error.message}</p>`;
            });
        } catch (error) {
            resultadosDiv.innerHTML = `<p class="result-error">Error: ${error.message}</p>`;
        }
    });

    const mascotaIdInput = document.getElementById('mascota_id');
    if (mascotaIdInput && mascotaIdInput.value) {
        fetch(`/mascotas/${mascotaIdInput.value}`, {
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '',
            },
        }).then(response => response.json()).then(mascota => {
            document.getElementById('nombre').value = mascota.nombre;
            document.getElementById('peso').value = mascota.peso;
            document.getElementById('categoria_edad').value = mascota.categoria_edad;
            document.getElementById('esterilizado').value = mascota.esterilizado ? '1' : '0';
            document.getElementById('nivel_actividad').value = mascota.nivel_actividad;
            document.getElementById('tipo_dieta').value = mascota.tipo_dieta_preferida;
            if (mascota.condiciones_salud) {
                mascota.condiciones_salud.forEach(value => {
                    document.querySelector(`input[name="condiciones_salud[]"][value="${value}"]`).checked = true;
                });
            }
            if (mascota.alimentos_alergia) {
                document.getElementById('alergia').checked = true;
                document.getElementById('alimentos_alergia').style.display = 'block';
                const alergiasSelect = document.getElementById('alimentos_alergia');
                for (let option of alergiasSelect.options) {
                    if (mascota.alimentos_alergia.includes(option.value)) {
                        option.selected = true;
                    }
                }
            }
        }).catch(error => {
            console.error('Error al cargar datos de la mascota:', error);
        });
    }

    const alergiaCheckbox = document.getElementById('alergia');
    const alergiasSelect = document.getElementById('alimentos_alergia');
    if (alergiaCheckbox && alergiasSelect) {
        alergiaCheckbox.addEventListener('change', function () {
            alergiasSelect.style.display = this.checked ? 'block' : 'none';
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

            const etiquetaManana = tipoDieta === 'cocida' ? `${formatearAlimento(alimentoManana)} (cocido)` : formatearAlimento(alimentoManana);
            const etiquetaTarde = tipoDieta === 'cocida' ? `${formatearAlimento(alimentoTarde)} (cocido)` : formatearAlimento(alimentoTarde);
            menu[dia].manana[categoria] = `${Math.round(gramosManana)}g ${etiquetaManana}`;
            menu[dia].tarde[categoria] = `${Math.round(gramosTarde)}g ${etiquetaTarde}`;
        }
    });
    return menu;
}

function mostrarResultados(nombrePerro, peso, energiaMetabolica, dieta, menuSemanal, ajustesAplicados, tipoDieta) {
    const divResultados = document.getElementById('resultados');
    let html = `
        <article class="card result-card">
            <h2 class="result-title">Dieta para ${nombrePerro}</h2>
            <div class="result-card-inner">
                <h3 class="result-subtitle">Resumen</h3>
                <ul class="result-list">
                    <li><strong>Nombre:</strong> ${nombrePerro}</li>
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
                    <tbody>
    `;

    for (let categoria in dieta) {
        html += `
            <tr>
                <td>${capitalizarCategoria(categoria)}</td>
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
            <div class="result-section">
                <h3 class="result-subtitle">Menú Semanal</h3>
                <div class="menu-weekly">
    `;

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
                    <tbody>
        `;
        const categorias = [...new Set([
            ...Object.keys(menuSemanal[dia].manana),
            ...Object.keys(menuSemanal[dia].tarde)
        ])];
        categorias.forEach((cat) => {
            html += `
                <tr>
                    <td>${capitalizarCategoria(cat)}</td>
                    <td>${menuSemanal[dia].manana[cat] || '-'}</td>
                    <td>${menuSemanal[dia].tarde[cat] || '-'}</td>
                </tr>
            `;
        });
        html += `
                    </tbody>
                </table>
            </div>
        `;
    });

    html += `
                </div>
            </div>
        </article>
    `;

    divResultados.innerHTML = html;
}
