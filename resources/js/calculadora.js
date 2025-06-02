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
    console.log('capitalizarCategoria llamado con:', categoria);
    if (!categoria) return 'Desconocida';
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
    console.log('formatearAlimento llamado con:', alimento);
    if (!alimento) return 'Desconocido';
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
    console.log('menu_json enviado:', menuJsonInput.value);

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

                if (razaSelect.dataset.currentRaza) {
                    const option = document.createElement('option');
                    option.value = razaSelect.dataset.currentRaza;
                    option.textContent = razaSelect.dataset.currentRaza;
                    option.selected = true;
                    razaSelect.appendChild(option);
                }
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
        console.log('Datos del formulario:', data);


        try {
            if (!data.peso || isNaN(data.peso) || data.peso <= 0) throw new Error('Peso inválido.');
            if (!data.categoria_edad) throw new Error('Selecciona categoría de edad.');
            if (!data.nivel_actividad) throw new Error('Selecciona nivel de actividad.');
            if (!data.tipo_dieta) throw new Error('Selecciona tipo de dieta.');
            if (!data.raza || data.raza.trim() === '') throw new Error('Selecciona una raza válida.');
            if (!data.tipo_dieta || data.tipo_dieta.trim() === '') throw new Error('Selecciona un tipo de dieta válido.');


            let energiaMetabolica = 70 * Math.pow(data.peso, 0.75);
            const ajustes = {
                cachorro_menor_4: 2,
                cachorro_mayor_4: 1.5,
                adulto: { baja: 0.8, moderada: 1, alta: 1.2 },
                senior: 0.7,
            };
            let factorAjuste = data.categoria_edad === 'adulto' ? ajustes[data.categoria_edad][data.nivel_actividad] : ajustes[data.categoria_edad];
            energiaMetabolica *= factorAjuste;

            let ajustesAplicados = [];
            if (data.condiciones_salud.includes('obesidad')) {
                energiaMetabolica *= 0.8;
                ajustesAplicados.push('Reducción por obesidad');
            }
            if (data.esterilizado) {
                energiaMetabolica *= 0.8;
                ajustesAplicados.push('Reducción por esterilización');
            }

            let dieta = {};
            if (data.tipo_dieta === 'barf' || data.tipo_dieta === 'cocida') {
                dieta = {
                    carne: { kcal: energiaMetabolica * 0.55, gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0 },
                    visceras: { kcal: energiaMetabolica * 0.10, gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0 },
                    huesos: { kcal: energiaMetabolica * 0.125, gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0 },
                    verduras: { kcal: energiaMetabolica * 0.125, gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0 },
                    grasas: { kcal: energiaMetabolica * 0.10, gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0 },
                };
            } else if (data.tipo_dieta === 'mixta_50') {
                dieta = {
                    pienso: { kcal: energiaMetabolica * 0.5, gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0 },
                    natural: { kcal: energiaMetabolica * 0.5, gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0 },
                };
            } else if (data.tipo_dieta === 'mixta_70') {
                dieta = {
                    pienso: { kcal: energiaMetabolica * 0.7, gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0 },
                    natural: { kcal: energiaMetabolica * 0.3, gramos: 0, proteinas: 0, grasas: 0, carbohidratos: 0 },
                };
            }

      /*      const menuSemanal = generarMenuSemanal(dieta, data.condiciones_salud, data.alimentos_alergia, data.tipo_dieta);
            menuJsonInput.value = JSON.stringify(menuSemanal); */
            const menuSemanal = generarMenuSemanal(dieta, data.condiciones_salud, data.alimentos_alergia, data.tipo_dieta);
            menuJsonInput.value = JSON.stringify(menuSemanal);
            console.log('menu_json enviado:', menuJsonInput.value);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: { 'Accept': 'application/json' },
            })
                .then(response => response.json())
                .then(data => {
                    console.log('Respuesta JSON:', data);
                    if (!data.success) throw new Error(data.error || 'Error al generar dieta.');
                    if (data.redirect) {
                        alert(data.message);
                        window.location.href = data.redirect;
                    } else {
                        mostrarResultados(data.nombre, data.peso, energiaMetabolica, dieta, menuSemanal, ajustesAplicados, data.tipo_dieta, data.raza);
                        descargarPDF(data.nombre, data.peso, energiaMetabolica, dieta, menuSemanal, ajustesAplicados, data.tipo_dieta, data.raza);
                        if (data.dieta_id && descargarPDFBtn) {
                            descargarPDFBtn.style.display = 'inline-block';
                            descargarPDFBtn.onclick = () => window.location.href = `/calculadora/download/${data.dieta_id}`;
                        }
                        if (contratarPlanBtn) contratarPlanBtn.style.display = 'inline-block';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    resultadosDiv.innerHTML = `Error: ${error.message}`;
                });
        } catch (error) {
            console.error('Error:', error);
            resultadosDiv.innerHTML = `Error: ${error.message}`;
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
<li><strong>Tipo de dieta: </strong> ${tipoDieta }</li>
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
// function descargarPDF(nombrePerro, peso, energiaMetabolica, dieta, menuSemanal, ajustesAplicados, tipoDieta, raza) {
//     const { jsPDF } = window.jspdf;
//     const doc = new jsPDF({
//         unit: 'px',
//         format: 'a4'
//     });
//
//     const pageWidth = doc.internal.pageSize.getWidth();
//     const pageHeight = doc.internal.pageSize.getHeight();
//     const margin = 60;
//     const containerWidth = pageWidth - 2 * margin;
//     let y = margin;
//
//     // Fondo blanco
//     doc.setFillColor(255, 255, 255);
//     doc.rect(0, 0, pageWidth, pageHeight, 'F');
//
//     // Logo (top-right, más pequeño)
//     const logoUrl = '/images/logo-barfco.png';
//     doc.addImage(logoUrl, 'PNG', pageWidth - margin - 80, margin - 40, 80, 0, undefined, 'NONE'); // Reducido de 120px a 80px
//
//     // Título
//     doc.setFontSize(24);
//     doc.setTextColor(224, 67, 18); // #e04312
//     doc.setFont('Helvetica', 'bold');
//     doc.text(`Dieta para ${nombrePerro || 'Perro'}`, margin, y, { maxWidth: 200 });
//     y += 35;
//
//     // Fecha
//     doc.setFontSize(10);
//     doc.setTextColor(80, 80, 80); // #505050
//     doc.setFont('Helvetica', 'normal');
//     doc.text(new Date().toLocaleDateString('es-ES'), margin, y);
//     y += 20;
//
//     // Sección: Datos de la mascota
//     doc.setFontSize(16);
//     doc.setTextColor(8, 54, 48); // #083630
//     doc.setFont('Helvetica', 'bold');
//     doc.text('Datos de la mascota', margin, y);
//     y += 12;
//
//     doc.setFontSize(10);
//     const items = [
//         { label: 'Nombre:', value: nombrePerro || 'No especificado' },
//         { label: 'Raza:', value: raza || 'No especificada' },
//         { label: 'Peso:', value: `${peso || 'No especificado'} kg` }
//     ];
//     items.forEach(item => {
//         doc.setTextColor(8, 54, 48);
//         doc.setFont('Helvetica', 'bold');
//         doc.text(item.label, margin, y);
//         doc.setTextColor(26, 29, 32);
//         doc.setFont('Helvetica', 'normal');
//         const labelWidth = doc.getTextWidth(item.label) + 5;
//         doc.text(item.value, margin + labelWidth, y);
//         y += 12;
//     });
//
//     // Línea
//     doc.setDrawColor(8, 54, 48);
//     doc.setLineWidth(0.5);
//     doc.line(margin, y, pageWidth - margin, y);
//     y += 15;
//
//     // Sección: Detalles de la dieta (texto fijo)
//     doc.setFontSize(16);
//     doc.setTextColor(8, 54, 48);
//     doc.setFont('Helvetica', 'bold');
//     doc.text('Detalles de la dieta', margin, y);
//     y += 12;
//
//     const dietaItems = [
//         { label: 'Tipo de dieta:', value: 'Mixta_70' },
//         { label: 'Calorías diarias:', value: '1913 kcal' },
//         { label: 'Ajustes aplicados:', value: 'Reducción por esterilización' }
//     ];
//     doc.setFontSize(10); // Mismo tamaño que "Datos de la mascota"
//     dietaItems.forEach(item => {
//         doc.setTextColor(8, 54, 48);
//         doc.setFont('Helvetica', 'bold');
//         doc.text(item.label, margin, y);
//         doc.setTextColor(26, 29, 32);
//         doc.setFont('Helvetica', 'normal');
//         const labelWidth = doc.getTextWidth(item.label) + 5;
//         doc.text(item.value, margin + labelWidth, y);
//         y += 12;
//     });
//     y += 20;
//
//     // Sección: Distribución de Macronutrientes
//     doc.setFontSize(20); // Reducido de 24px a 20px
//     doc.setTextColor(41, 44, 43); // #292c2b
//     doc.setFont('Helvetica', 'bold');
//     doc.text('Distribución de Macronutrientes', margin, y);
//     y += 25;
//
//     // Tabla de Macronutrientes
//     const headers = ['Categoría', 'kcal', 'g', 'Prot.', 'Grasas', 'CH'];
//     const colWidths = [containerWidth * 0.35, containerWidth * 0.13, containerWidth * 0.13, containerWidth * 0.13, containerWidth * 0.13, containerWidth * 0.13];
//     const rowHeight = 18;
//
//     // Encabezado
//     doc.setFillColor(224, 67, 18);
//     doc.rect(margin, y, containerWidth, rowHeight, 'F');
//     doc.setFontSize(10);
//     doc.setTextColor(255, 255, 255);
//     doc.setFont('Helvetica', 'bold');
//     headers.forEach((header, i) => {
//         doc.text(header, margin + 5 + colWidths.slice(0, i).reduce((a, b) => a + b, 0), y + 13);
//     });
//     y += rowHeight;
//
//     // Filas
//     let rowIndex = 0;
//     for (let categoria in dieta) {
//         if (y > pageHeight - margin - 40) {
//             doc.addPage();
//             doc.setFillColor(255, 255, 255);
//             doc.rect(0, 0, pageWidth, pageHeight, 'F');
//             y = margin;
//         }
//         if (rowIndex % 2 === 0) {
//             doc.setFillColor(240, 240, 240);
//             doc.rect(margin, y, containerWidth, rowHeight, 'F');
//         }
//         doc.setFontSize(10);
//         doc.setTextColor(80, 80, 80);
//         doc.setFont('Helvetica', 'normal');
//         const rowData = [
//             capitalizarCategoria(categoria),
//             Math.round(dieta[categoria].kcal).toString(),
//             Math.round(dieta[categoria].gramos).toString(),
//             Math.round(dieta[categoria].proteinas).toString(),
//             Math.round(dieta[categoria].grasas).toString(),
//             Math.round(dieta[categoria].carbohidratos).toString()
//         ];
//         rowData.forEach((cell, i) => {
//             doc.text(cell, margin + 5 + colWidths.slice(0, i).reduce((a, b) => a + b, 0), y + 13);
//         });
//         doc.setDrawColor(0, 0, 0);
//         doc.setLineWidth(0.5); // Bordes más delgados
//         doc.rect(margin, y, containerWidth, rowHeight);
//         colWidths.reduce((x, w) => {
//             doc.line(x, y, x, y + rowHeight);
//             return x + w;
//         }, margin);
//         y += rowHeight;
//         rowIndex++;
//     }
//     y += 25; // Más separación entre tablas
//
//     // Línea
//     doc.setDrawColor(8, 54, 48);
//     doc.setLineWidth(0.5);
//     doc.line(margin, y, pageWidth - margin, y);
//     y += 25; // Más espacio antes de "Menú Semanal"
//
//     // Sección: Menú Semanal
//     doc.setFontSize(20); // Reducido de 24px a 20px
//     doc.setTextColor(41, 44, 43);
//     doc.setFont('Helvetica', 'bold');
//     doc.text('Menú Semanal', margin, y);
//     y += 25;
//
//     for (let dia in menuSemanal) {
//         if (y > pageHeight - margin - 60) {
//             doc.addPage();
//             doc.setFillColor(255, 255, 255);
//             doc.rect(0, 0, pageWidth, pageHeight, 'F');
//             y = margin;
//         }
//         doc.setFontSize(12);
//         doc.setTextColor(8, 54, 48);
//         doc.setFont('Helvetica', 'bold');
//         doc.text(dia, margin, y);
//         y += 12;
//
//         const categorias = [...new Set([
//             ...Object.keys(menuSemanal[dia].manana),
//             ...Object.keys(menuSemanal[dia].tarde)
//         ])];
//         if (menuSemanal[dia].manana.suplemento || menuSemanal[dia].tarde.suplemento) {
//             categorias.push('suplemento');
//         }
//
//         // Encabezado de la tabla de menú
//         doc.setFillColor(224, 67, 18);
//         doc.rect(margin, y, containerWidth, rowHeight, 'F');
//         doc.setFontSize(10);
//         doc.setTextColor(255, 255, 255);
//         doc.setFont('Helvetica', 'bold');
//         const menuHeaders = ['Categoría', 'Mañana', 'Tarde'];
//         const menuColWidths = [containerWidth * 0.3, containerWidth * 0.35, containerWidth * 0.35];
//         menuHeaders.forEach((header, i) => {
//             doc.text(header, margin + 5 + menuColWidths.slice(0, i).reduce((a, b) => a + b, 0), y + 13);
//         });
//         y += rowHeight;
//
//         // Filas de la tabla de menú
//         categorias.forEach((cat, index) => {
//             if (y > pageHeight - margin - 40) {
//                 doc.addPage();
//                 doc.setFillColor(255, 255, 255);
//                 doc.rect(0, 0, pageWidth, pageHeight, 'F');
//                 y = margin;
//             }
//             if (index % 2 === 0) {
//                 doc.setFillColor(240, 240, 240);
//                 doc.rect(margin, y, containerWidth, rowHeight, 'F');
//             }
//             doc.setFontSize(10);
//             doc.setTextColor(80, 80, 80);
//             doc.setFont('Helvetica', 'normal');
//             const rowData = [
//                 capitalizarCategoria(cat),
//                 menuSemanal[dia].manana[cat] || '-',
//                 menuSemanal[dia].tarde[cat] || '-'
//             ];
//             rowData.forEach((cell, i) => {
//                 doc.text(cell, margin + 5 + menuColWidths.slice(0, i).reduce((a, b) => a + b, 0), y + 13, { maxWidth: menuColWidths[i] - 10 });
//             });
//             doc.setDrawColor(0, 0, 0);
//             doc.setLineWidth(0.5); // Bordes más delgados
//             doc.rect(margin, y, containerWidth, rowHeight);
//             menuColWidths.reduce((x, w) => {
//                 doc.line(x, y, x, y + rowHeight);
//                 return x + w;
//             }, margin);
//             y += rowHeight;
//         });
//         y += 25; // Más separación entre tablas
//     }
//
//     // Footer
//     doc.setFontSize(10);
//     doc.setTextColor(80, 80, 80);
//     doc.setFont('Helvetica', 'normal');
//     doc.text('Barf&Co - Todos los derechos reservados ©', pageWidth / 2, pageHeight - 10, { align: 'center' });
//
//     doc.save(`Dieta_${nombrePerro}_${new Date().toISOString().split('T')[0]}.pdf`);
// }
//

function descargarPDF(nombrePerro, peso, energiaMetabolica, dieta, menuSemanal, ajustesAplicados, tipoDieta, raza) {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF({
        unit: 'px',
        format: 'a4'
    });

    const pageWidth = doc.internal.pageSize.getWidth();
    const pageHeight = doc.internal.pageSize.getHeight();
    const margin = 60;
    const containerWidth = pageWidth - 2 * margin;
    let y = margin;

    // Fondo blanco
    doc.setFillColor(255, 255, 255);
    doc.rect(0, 0, pageWidth, pageHeight, 'F');

    // Logo (top-right)
    const logoUrl = '/images/logo-barfco.png';
    doc.addImage(logoUrl, 'PNG', pageWidth - margin - 80, margin - 40, 80, 0, undefined, 'NONE');

    // Título
    doc.setFontSize(24);
    doc.setTextColor(224, 67, 18); // #e04312
    doc.setFont('Helvetica', 'bold');
    doc.text(`Dieta para ${nombrePerro || 'Perro'}`, margin, y, { maxWidth: 150 });
    y += 35;

    // Fecha
    doc.setFontSize(10);
    doc.setTextColor(80, 80, 80); // #505050
    doc.setFont('Helvetica', 'normal');
    doc.text(new Date().toLocaleDateString('es-ES'), margin, y);
    y += 20;

    // Sección: Datos de la mascota
    doc.setFontSize(14); // Reducido de 16px
    doc.setTextColor(8, 54, 48); // #083630
    doc.setFont('Helvetica', 'bold');
    doc.text('Datos de la mascota', margin, y);
    y += 15;

    doc.setFontSize(10);
    const items = [
        { label: 'Nombre:', value: nombrePerro || 'No especificado' },
        { label: 'Raza:', value: raza || 'No especificada' },
        { label: 'Peso:', value: `${peso || 'No especificado'} kg` }
    ];
    items.forEach(item => {
        doc.setTextColor(8, 54, 48);
        doc.setFont('Helvetica', 'bold');
        doc.text(item.label, margin, y);
        doc.setTextColor(26, 29, 32);
        doc.setFont('Helvetica', 'normal');
        const labelWidth = doc.getTextWidth(item.label) + 5;
        doc.text(item.value, margin + labelWidth, y);
        y += 12;
    });

    //línea
    doc.setDrawColor(8, 54, 48);
    doc.setLineWidth(0.5);
    doc.line(margin, y, pageWidth - margin, y);
    y += 20; // Más espaciado

    // Sección: Detalles de la dieta (dinámico)
    doc.setFontSize(14);
    doc.setTextColor(8, 54, 48);
    doc.setFont('Helvetica', 'bold');
    doc.text('Detalles de la dieta', margin, y);
    y += 15;

    doc.setFontSize(10);
    const dietaItems = [
        { label: 'Tipo de dieta:', value: tipoDieta || 'No especificado' },
        { label: 'Calorías diarias:', value: `${Math.round(energiaMetabolica) || 'No especificado'} kcal` },
        ...(ajustesAplicados.length > 0 ? [{ label: 'Ajustes aplicados:', value: ajustesAplicados.join(', ') }] : [])
    ];
    dietaItems.forEach(item => {
        doc.setTextColor(8, 54, 48);
        doc.setFont('Helvetica', 'bold');
        doc.text(item.label, margin, y);
        doc.setTextColor(26, 29, 32);
        doc.setFont('Helvetica', 'normal');
        const labelWidth = doc.getTextWidth(item.label) + 5;
        doc.text(item.value, margin + labelWidth, y);
        y += 12;
    });
    y += 20;

    //sección: Distribución de Macronutrientes
    doc.setFontSize(20);
    doc.setTextColor(41, 44, 43); // #292c2b
    doc.setFont('Helvetica', 'bold');
    doc.text('Distribución de Macronutrientes', margin, y);
    y += 25;

    //tabla de Macronutrientes
    const headers = ['Categoría', 'kcal', 'g', 'Prot.', 'Grasas', 'CH'];
    const colWidths = [containerWidth * 0.35, containerWidth * 0.13, containerWidth * 0.13, containerWidth * 0.13, containerWidth * 0.13, containerWidth * 0.13];
    const rowHeight = 18;

    //encabezado con borde naranja fino
    doc.setFillColor(224, 67, 18); // #e04312
    doc.rect(margin, y, containerWidth, rowHeight, 'F');
    doc.setDrawColor(224, 67, 18); // Borde del mismo color
    doc.setLineWidth(0.5);
    doc.rect(margin, y, containerWidth, rowHeight);
    doc.setFontSize(10);
    doc.setTextColor(255, 255, 255);
    doc.setFont('Helvetica', 'bold');
    headers.forEach((header, i) => {
        doc.text(header, margin + 5 + colWidths.slice(0, i).reduce((a, b) => a + b, 0), y + 13);
    });
    y += rowHeight;

    //Filas
    let rowIndex = 0;
    for (let categoria in dieta) {
        if (y > pageHeight - margin - 40) {
            doc.addPage();
            doc.setFillColor(255, 255, 255);
            doc.rect(0, 0, pageWidth, pageHeight, 'F');
            y = margin;
        }
        if (rowIndex % 2 === 0) {
            doc.setFillColor(240, 240, 240);
            doc.rect(margin, y, containerWidth, rowHeight, 'F');
        }
        doc.setFontSize(10);
        doc.setTextColor(80, 80, 80);
        doc.setFont('Helvetica', 'normal');
        const rowData = [
            capitalizarCategoria(categoria),
            Math.round(dieta[categoria].kcal).toString(),
            Math.round(dieta[categoria].gramos).toString(),
            Math.round(dieta[categoria].proteinas).toString(),
            Math.round(dieta[categoria].grasas).toString(),
            Math.round(dieta[categoria].carbohidratos).toString()
        ];
        rowData.forEach((cell, i) => {
            doc.text(cell, margin + 5 + colWidths.slice(0, i).reduce((a, b) => a + b, 0), y + 13);
        });
        doc.setDrawColor(0, 0, 0);
        doc.setLineWidth(0.5);
        doc.rect(margin, y, containerWidth, rowHeight);
        colWidths.reduce((x, w) => {
            doc.line(x, y, x, y + rowHeight);
            return x + w;
        }, margin);
        y += rowHeight;
        rowIndex++;
    }
    y += 30;

    // línea
    doc.setDrawColor(8, 54, 48);
    doc.setLineWidth(0.5);
    doc.line(margin, y, pageWidth - margin, y);
    y += 20;

    // Sección: Menú Semanal
    doc.setFontSize(20);
    doc.setTextColor(41, 44, 43);
    doc.setFont('Helvetica', 'bold');
    doc.text('Menú Semanal', margin, y);
    y += 25;

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
        y += 12;

        const categorias = [...new Set([
            ...Object.keys(menuSemanal[dia].manana),
            ...Object.keys(menuSemanal[dia].tarde)
        ])];
        if (menuSemanal[dia].manana.suplemento || menuSemanal[dia].tarde.suplemento) {
            categorias.push('suplemento');
        }

        // Encabezado de la tabla de menú con borde naranja fino
        doc.setFillColor(224, 67, 18);
        doc.rect(margin, y, containerWidth, rowHeight, 'F');
        doc.setDrawColor(224, 67, 18);
        doc.setLineWidth(0.5);
        doc.rect(margin, y, containerWidth, rowHeight);
        doc.setFontSize(10);
        doc.setTextColor(255, 255, 255);
        doc.setFont('Helvetica', 'bold');
        const menuHeaders = ['Categoría', 'Mañana', 'Tarde'];
        const menuColWidths = [containerWidth * 0.3, containerWidth * 0.35, containerWidth * 0.35];
        menuHeaders.forEach((header, i) => {
            doc.text(header, margin + 5 + menuColWidths.slice(0, i).reduce((a, b) => a + b, 0), y + 13);
        });
        y += rowHeight;

        // Filas de la tabla de menú
        categorias.forEach((cat, index) => {
            if (y > pageHeight - margin - 40) {
                doc.addPage();
                doc.setFillColor(255, 255, 255);
                doc.rect(0, 0, pageWidth, pageHeight, 'F');
                y = margin;
            }
            if (index % 2 === 0) {
                doc.setFillColor(240, 240, 240);
                doc.rect(margin, y, containerWidth, rowHeight, 'F');
            }
            doc.setFontSize(10);
            doc.setTextColor(80, 80, 80);
            doc.setFont('Helvetica', 'normal');
            const rowData = [
                capitalizarCategoria(cat),
                menuSemanal[dia].manana[cat] || '-',
                menuSemanal[dia].tarde[cat] || '-'
            ];
            rowData.forEach((cell, i) => {
                doc.text(cell, margin + 5 + menuColWidths.slice(0, i).reduce((a, b) => a + b, 0), y + 13, { maxWidth: menuColWidths[i] - 10 });
            });
            doc.setDrawColor(0, 0, 0);
            doc.setLineWidth(0.5);
            doc.rect(margin, y, containerWidth, rowHeight);
            menuColWidths.reduce((x, w) => {
                doc.line(x, y, x, y + rowHeight);
                return x + w;
            }, margin);
            y += rowHeight;
        });
        y += 30; // Más separación entre tablas
    }

    // Footer (más pequeño)
    doc.setFontSize(8); // Reducido de 10px
    doc.setTextColor(80, 80, 80);
    doc.setFont('Helvetica', 'normal');
    doc.text('Barf&Co - Todos los derechos reservados ©', pageWidth / 2, pageHeight - 10, { align: 'center' });

    doc.save(`Dieta_${nombrePerro}_${new Date().toISOString().split('T')[0]}.pdf`);
}

/* loggo
const logoUrl = '/images/logo-barfco.png';
const logoWidth = 30;
const logoHeight = 30;
doc.addImage(logoUrl, 'PNG', margin, margin, logoWidth, logoHeight, undefined, 'NONE'); */


