<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizador Pro ✨ IA Edition</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --accent-color: #3498db;
            --ai-color: #8e44ad;
            --bg-light: #f8f9fa;
        }

        body {
            background-color: var(--bg-light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--primary-color);
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .card-header {
            background-color: white;
            border-bottom: 1px solid #eee;
            border-radius: 15px 15px 0 0 !important;
            padding: 1.5rem;
        }

        .btn-primary {
            background-color: var(--accent-color);
            border: none;
            border-radius: 8px;
            padding: 0.6rem 1.5rem;
            transition: all 0.3s;
        }

        .btn-ai {
            background: linear-gradient(45deg, #8e44ad, #3498db);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.6rem 1.2rem;
            transition: all 0.3s;
        }

        .btn-ai:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            color: white;
        }

        .btn-ai:disabled {
            background: #bdc3c7;
        }

        .summary-box {
            background-color: #fff;
            padding: 2rem;
            border-radius: 15px;
            border: 1px solid #eee;
        }

        .total-row {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--accent-color);
        }

        .product-badge {
            font-size: 0.75rem;
            background-color: #e1f0fa;
            color: #3498db;
            padding: 0.2rem 0.5rem;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .ai-output-box {
            background-color: #f4f0f8;
            border-left: 4px solid var(--ai-color);
            padding: 1rem;
            border-radius: 0 10px 10px 0;
            font-size: 0.9rem;
            margin-top: 1rem;
            white-space: pre-wrap;
        }

        .loading-spinner {
            display: none;
            width: 1rem;
            height: 1rem;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin-right: 0.5rem;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        @media print {
            .no-print {
                display: none;
            }

            .card {
                box-shadow: none;
                border: 1px solid #ddd;
            }
        }
    </style>
</head>

<body>

    <div class="container py-5">
        <div class="row mb-4 no-print">
            <div class="col-12 text-center">
                <h1 class="fw-bold"><i class="bi bi-stars text-primary me-2"></i>Cotizador Pro ✨</h1>
                <p class="text-muted">Presupuestos inteligentes potenciados por Inteligencia Artificial</p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Panel de Entrada de Datos -->
            <div class="col-lg-8">
                <div class="card mb-4 no-print">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="bi bi-cart-plus me-2"></i>Agregar Productos</h5>
                    </div>
                    <div class="card-body">
                        <form id="productForm" class="row g-3 align-items-end">
                            <div class="col-md-5">
                                <label class="form-label fw-semibold">Artículo</label>
                                <select id="productSelect" class="form-select" required>
                                    <option value="" selected disabled>Selecciona un producto...</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-semibold">Precio Unit. ($)</label>
                                <input type="number" id="unitPrice" class="form-control" placeholder="0.00" step="any" required>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label fw-semibold">Cantidad</label>
                                <input type="number" id="productQty" class="form-control" value="1" min="1" required>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="bi bi-plus-lg"></i>
                                </button>
                            </div>

                            <!-- Campos dinámicos para Alfombra -->
                            <div id="carpetDimensions" class="col-12 mt-3 d-none border-top pt-3">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-4 text-primary">
                                        <i class="bi bi-info-circle me-1"></i> <small id="areaHelperText">Cálculo por m²</small>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label small fw-bold">Ancho (mts)</label>
                                        <input type="number" id="carpetWidth" class="form-control" step="0.01" value="1.00">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label small fw-bold">Largo (mts)</label>
                                        <input type="number" id="carpetLength" class="form-control" step="0.01" value="1.00">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Tabla de Cotización -->
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0"><i class="bi bi-file-earmark-text me-2"></i>Detalle del Presupuesto</h5>
                        <button class="btn btn-outline-danger btn-sm no-print" onclick="clearQuote()">
                            <i class="bi bi-trash me-1"></i> Limpiar todo
                        </button>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive table-container">
                            <table class="table table-hover align-middle mb-0" id="quoteTable">
                                <thead class="table-light text-uppercase small fw-bold">
                                    <tr>
                                        <th class="ps-4">Descripción</th>
                                        <th class="text-center">Cant.</th>
                                        <th class="text-end">Precio (u. o m²)</th>
                                        <th class="text-end">Subtotal</th>
                                        <th class="text-end pe-4 no-print">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="emptyRow">
                                        <td colspan="5" class="text-center py-5 text-muted">
                                            No hay productos agregados a la cotización.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Panel de Inteligencia Artificial ✨ -->
                <div class="card no-print" id="aiPanel" style="display:none;">
                    <div class="card-header">
                        <h5 class="mb-0 text-purple"><i class="bi bi-stars me-2"></i>Asistente Inteligente ✨</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <button id="btnAiSuggest" class="btn btn-ai w-100" onclick="getAiSuggestions()">
                                    <div class="loading-spinner"></div> Sugerir Complementos ✨
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button id="btnAiDraft" class="btn btn-ai w-100" onclick="getAiDraft()">
                                    <div class="loading-spinner"></div> Redactar Propuesta ✨
                                </button>
                            </div>
                        </div>
                        <div id="aiOutput" class="ai-output-box" style="display:none;"></div>
                        <div class="mt-2" id="aiActions" style="display:none;">
                            <button class="btn btn-sm btn-outline-secondary" onclick="copyAiContent()">
                                <i class="bi bi-clipboard me-1"></i> Copiar texto
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Panel de Resumen y Totales -->
            <div class="col-lg-4">
                <div class="summary-box shadow-sm sticky-top" style="top: 2rem;">
                    <h5 class="mb-4 border-bottom pb-2">Resumen Financiero</h5>

                    <div class="mb-4 no-print border-bottom pb-3">
                        <!-- Sección de Descuento -->
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="discountToggle">
                                <label class="form-check-label small fw-bold text-muted text-uppercase" for="discountToggle">¿Aplicar descuento?</label>
                            </div>
                        </div>

                        <div id="discountWrapper" class="mb-3" style="display: none;">
                            <label class="form-label small fw-bold text-muted text-uppercase">Descuento (%)</label>
                            <div class="input-group input-group-sm">
                                <input type="number" id="discountInput" class="form-control text-end" value="0" min="0" max="100">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>

                        <!-- Sección de IVA -->
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="ivaToggleMaster">
                                <label class="form-check-label small fw-bold text-muted text-uppercase" for="ivaToggleMaster">¿Incluir IVA?</label>
                            </div>
                        </div>

                        <div id="ivaWrapper" class="mb-3" style="display: none;">
                            <label class="form-label small fw-bold text-muted text-uppercase">Tasa de IVA (%)</label>
                            <div class="input-group input-group-sm">
                                <input type="number" id="ivaInput" class="form-control text-end" value="16" min="0" max="100">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted small">Subtotal Bruto:</span>
                        <span id="displaySubtotal" class="small">$0.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2 text-danger">
                        <span class="small">Descuento aplicado:</span>
                        <span id="displayDiscount" class="small">-$0.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted small">Base Gravable:</span>
                        <span id="displayBase" class="small">$0.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3 border-bottom pb-3">
                        <span id="displayIvaLabel" class="text-muted small">IVA (0%):</span>
                        <span id="displayIVA" class="small">$0.00</span>
                    </div>
                    <div class="d-flex justify-content-between total-row">
                        <span>TOTAL:</span>
                        <span id="displayTotal">$0.00</span>
                    </div>

                    <div class="mt-4 no-print">
                        <button class="btn btn-dark w-100 mb-2" onclick="window.print()">
                            <i class="bi bi-printer me-2"></i>Imprimir Cotización
                        </button>
                        <button class="btn btn-outline-secondary w-100" onclick="location.reload()">
                            <i class="bi bi-arrow-clockwise me-2"></i>Nueva Consulta
                        </button>
                    </div>

                    <div class="mt-4 alert alert-info py-2 no-print" style="font-size:0.75rem;">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        Añade productos para activar el asistente de IA ✨.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // ==========================================
        // 1. BASE DE DATOS DE PRODUCTOS
        // ==========================================
        const products = [{
                id: 1,
                name: "Silla (Modelo A)",
                price: 100.00,
                category: "Sillas"
            },
            {
                id: 2,
                name: "Silla (Modelo B)",
                price: 85.00,
                category: "Sillas"
            },
            {
                id: 3,
                name: "Sillón Individual",
                price: 275.00,
                category: "Sillones"
            },
            {
                id: 4,
                name: "Sillón Doble",
                price: 450.00,
                category: "Sillones"
            },
            {
                id: 5,
                name: "Sillón Triple",
                price: 550.00,
                category: "Sillones"
            },
            {
                id: 6,
                name: "Colchón Individual",
                price: 600.00,
                category: "Descanso"
            },
            {
                id: 7,
                name: "Colchón Matrimonial",
                price: 700.00,
                category: "Descanso"
            },
            {
                id: 8,
                name: "Colchón Queen",
                price: 800.00,
                category: "Descanso"
            },
            {
                id: 9,
                name: "Colchón King",
                price: 900.00,
                category: "Descanso"
            },
            {
                id: 10,
                name: "Cabecera Individual",
                price: 400.00,
                category: "Cabeceras"
            },
            {
                id: 11,
                name: "Cabecera Matrimonial",
                price: 450.00,
                category: "Cabeceras"
            },
            {
                id: 12,
                name: "Cabecera Queen",
                price: 500.00,
                category: "Cabeceras"
            },
            {
                id: 13,
                name: "Cabecera King",
                price: 550.00,
                category: "Cabeceras"
            },
            {
                id: 14,
                name: "Base Individual",
                price: 280.00,
                category: "Bases"
            },
            {
                id: 15,
                name: "Base Matrimonial",
                price: 380.00,
                category: "Bases"
            },
            {
                id: 16,
                name: "Base Queen",
                price: 480.00,
                category: "Bases"
            },
            {
                id: 17,
                name: "Base King",
                price: 580.00,
                category: "Bases"
            },
            {
                id: 18,
                name: "Alfombra",
                price: 185.00,
                category: "Alfombras",
                isByArea: true
            }
        ];

        // ==========================================
        // 2. CONFIGURACIÓN Y ESTADO
        // ==========================================
        let quoteItems = [];
        let itemIdCounter = 0;
        const apiKey = ""; // La clave se inyecta automáticamente

        // ==========================================
        // 3. SELECTORES DEL DOM
        // ==========================================
        const productSelect = document.getElementById('productSelect');
        const unitPrice = document.getElementById('unitPrice');
        const productQty = document.getElementById('productQty');
        const productForm = document.getElementById('productForm');
        const quoteTableBody = document.querySelector('#quoteTable tbody');
        const discountToggle = document.getElementById('discountToggle');
        const discountWrapper = document.getElementById('discountWrapper');
        const discountInput = document.getElementById('discountInput');
        const ivaToggleMaster = document.getElementById('ivaToggleMaster');
        const ivaWrapper = document.getElementById('ivaWrapper');
        const ivaInput = document.getElementById('ivaInput');
        const carpetDimensions = document.getElementById('carpetDimensions');
        const carpetWidth = document.getElementById('carpetWidth');
        const carpetLength = document.getElementById('carpetLength');
        const aiPanel = document.getElementById('aiPanel');
        const aiOutput = document.getElementById('aiOutput');
        const aiActions = document.getElementById('aiActions');

        // ==========================================
        // 4. INTEGRACIÓN CON GEMINI API ✨
        // ==========================================
        async function callGemini(prompt) {
            const url = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash-preview-09-2025:generateContent?key=${apiKey}`;
            const payload = {
                contents: [{
                    parts: [{
                        text: prompt
                    }]
                }]
            };

            for (let i = 0; i < 5; i++) {
                try {
                    const response = await fetch(url, {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify(payload)
                    });
                    if (!response.ok) throw new Error("Error API");
                    const result = await response.json();
                    return result.candidates?.[0]?.content?.parts?.[0]?.text;
                } catch (error) {
                    await new Promise(res => setTimeout(res, Math.pow(2, i) * 1000));
                }
            }
            throw new Error("Fallo final");
        }

        async function getAiSuggestions() {
            const btn = document.getElementById('btnAiSuggest');
            setAiLoading(btn, true);
            const itemsList = quoteItems.map(i => `${i.name} (${i.category})`).join(", ");
            const prompt = `Actúa como decorador experto. Cotización actual: [${itemsList}]. Sugiere 2 artículos complementarios para este espacio. Sé conciso y profesional en español.`;
            try {
                const response = await callGemini(prompt);
                showAiResult(response);
            } catch (e) {
                showAiResult("Error de conexión.");
            } finally {
                setAiLoading(btn, false);
            }
        }

        async function getAiDraft() {
            const btn = document.getElementById('btnAiDraft');
            setAiLoading(btn, true);
            const total = document.getElementById('displayTotal').textContent;
            const items = quoteItems.map(i => `- ${i.quantity}x ${i.name}`).join("\n");
            const disc = (discountToggle.checked && discountInput.value > 0) ? `Descuento del ${discountInput.value}%.` : "";
            const prompt = `Redacta propuesta comercial elegante. Items:\n${items}\n${disc}\nTotal: ${total}. Sin placeholders, saludo cordial. Español.`;
            try {
                const response = await callGemini(prompt);
                showAiResult(response);
            } catch (e) {
                showAiResult("Error al generar.");
            } finally {
                setAiLoading(btn, false);
            }
        }

        function setAiLoading(btn, isLoading) {
            const spinner = btn.querySelector('.loading-spinner');
            btn.disabled = isLoading;
            spinner.style.display = isLoading ? 'inline-block' : 'none';
            if (isLoading) {
                aiOutput.style.display = 'none';
                aiActions.style.display = 'none';
            }
        }

        function showAiResult(text) {
            aiOutput.textContent = text;
            aiOutput.style.display = 'block';
            aiActions.style.display = 'block';
            aiOutput.scrollIntoView({
                behavior: 'smooth'
            });
        }

        function copyAiContent() {
            const text = aiOutput.textContent;
            const textArea = document.createElement("textarea");
            textArea.value = text;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
            alert("¡Copiado! ✨");
        }

        // ==========================================
        // 5. LÓGICA DE NEGOCIO
        // ==========================================
        function init() {
            products.forEach(p => {
                const option = document.createElement('option');
                option.value = p.id;
                option.textContent = p.name;
                productSelect.appendChild(option);
            });

            productSelect.addEventListener('change', (e) => {
                const product = products.find(p => p.id === parseInt(e.target.value));
                if (product) {
                    unitPrice.value = product.price;
                    carpetDimensions.classList.toggle('d-none', !product.isByArea);
                }
            });

            // Toggle Descuento
            discountToggle.addEventListener('change', (e) => {
                discountWrapper.style.display = e.target.checked ? 'block' : 'none';
                if (!e.target.checked) discountInput.value = 0;
                calculateTotals();
            });

            // Toggle IVA
            ivaToggleMaster.addEventListener('change', (e) => {
                ivaWrapper.style.display = e.target.checked ? 'block' : 'none';
                if (!e.target.checked) ivaInput.value = 0;
                else if (ivaInput.value == 0) ivaInput.value = 16; // Default si se activa y estaba en 0
                calculateTotals();
            });

            productForm.addEventListener('submit', handleAddProduct);
            discountInput.addEventListener('input', calculateTotals);
            ivaInput.addEventListener('input', calculateTotals);
        }

        function handleAddProduct(e) {
            e.preventDefault();
            const productId = parseInt(productSelect.value);
            const customPrice = parseFloat(unitPrice.value);
            const quantity = parseInt(productQty.value);
            const product = products.find(p => p.id === productId);
            if (!product) return;

            let newItem = {
                ...product,
                quantity,
                uniqueId: itemIdCounter++
            };

            if (product.isByArea) {
                const area = (parseFloat(carpetWidth.value) || 0) * (parseFloat(carpetLength.value) || 0);
                newItem.width = carpetWidth.value;
                newItem.length = carpetLength.value;
                newItem.area = area;
                newItem.unitPriceUsed = customPrice;
                newItem.calculatedPrice = area * customPrice;
            } else {
                newItem.unitPriceUsed = customPrice;
                newItem.calculatedPrice = customPrice;
            }

            quoteItems.push(newItem);
            updateUI();
            productForm.reset();
            carpetDimensions.classList.add('d-none');
            if (quoteItems.length > 0) aiPanel.style.display = 'block';
        }

        function removeProduct(uniqueId) {
            quoteItems = quoteItems.filter(item => item.uniqueId !== uniqueId);
            if (quoteItems.length === 0) aiPanel.style.display = 'none';
            updateUI();
        }

        function clearQuote() {
            if (confirm('¿Vaciar cotización?')) {
                quoteItems = [];
                aiPanel.style.display = 'none';
                updateUI();
            }
        }

        function calculateTotals() {
            const subtotalBruto = quoteItems.reduce((acc, item) => acc + (item.calculatedPrice * item.quantity), 0);

            const discRate = discountToggle.checked ? (parseFloat(discountInput.value) || 0) : 0;
            const discountAmount = subtotalBruto * (discRate / 100);

            const baseImponible = subtotalBruto - discountAmount;

            const ivaRate = ivaToggleMaster.checked ? (parseFloat(ivaInput.value) || 0) : 0;
            const ivaAmount = baseImponible * (ivaRate / 100);

            const totalFinal = baseImponible + ivaAmount;

            document.getElementById('displaySubtotal').textContent = formatCurrency(subtotalBruto);
            document.getElementById('displayDiscount').textContent = `-${formatCurrency(discountAmount)}`;
            document.getElementById('displayBase').textContent = formatCurrency(baseImponible);
            document.getElementById('displayIvaLabel').textContent = `IVA (${ivaRate}%):`;
            document.getElementById('displayIVA').textContent = formatCurrency(ivaAmount);
            document.getElementById('displayTotal').textContent = formatCurrency(totalFinal);
        }

        function updateUI() {
            quoteTableBody.innerHTML = '';
            if (quoteItems.length === 0) {
                quoteTableBody.innerHTML = `<tr><td colspan="5" class="text-center py-5 text-muted">No hay productos.</td></tr>`;
            } else {
                quoteItems.forEach(item => {
                    const row = document.createElement('tr');
                    let desc = `<div class="fw-bold">${item.name}</div><span class="product-badge">${item.category}</span>`;
                    if (item.isByArea) desc += `<div class="dimension-label mt-1"><i class="bi bi-rulers"></i> ${item.width}m x ${item.length}m (${item.area.toFixed(2)} m²)</div>`;
                    const prc = item.isByArea ? `$${item.unitPriceUsed.toLocaleString()} <small>/m²</small>` : `$${item.unitPriceUsed.toLocaleString()}`;
                    row.innerHTML = `
                    <td class="ps-4">${desc}</td>
                    <td class="text-center">${item.quantity}</td>
                    <td class="text-end">${prc}</td>
                    <td class="text-end fw-bold">$${(item.calculatedPrice * item.quantity).toLocaleString()}</td>
                    <td class="text-end pe-4 no-print">
                        <button class="btn btn-link text-danger p-0" onclick="removeProduct(${item.uniqueId})"><i class="bi bi-x-circle-fill fs-5"></i></button>
                    </td>`;
                    quoteTableBody.appendChild(row);
                });
            }
            calculateTotals();
        }

        function formatCurrency(amount) {
            return new Intl.NumberFormat('es-MX', {
                style: 'currency',
                currency: 'MXN'
            }).format(amount);
        }

        init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>