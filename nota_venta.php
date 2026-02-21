<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota de Venta - Mueblería y Alfombras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #1a252f;
            --accent-color: #2980b9;
            --bg-light: #f4f7f6;
        }

        body {
            background-color: var(--bg-light);
            font-family: 'Segoe UI', system-ui, sans-serif;
            font-size: 10pt;
            color: var(--primary-color);
        }

        .nota-container {
            background-color: white;
            padding: 2.5rem;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 2rem;
            margin-bottom: 2rem;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }

        .folio-box {
            border: 2px solid var(--primary-color);
            padding: 10px;
            border-radius: 8px;
            text-align: center;
            background-color: #fff;
        }

        .sucursal-info {
            font-size: 0.9rem;
            line-height: 1.3;
        }

        .table-custom thead {
            background-color: var(--primary-color);
            color: white;
        }

        .signature-line {
            border-top: 1px solid #000;
            margin-top: 50px;
            width: 250px;
            display: inline-block;
        }

        /* Estilo para que los inputs parezcan texto plano al imprimir */
        @media print {
            .no-print {
                display: none !important;
            }

            body {
                background-color: white;
            }

            .nota-container {
                box-shadow: none;
                margin: 0;
                padding: 0;
                width: 100%;
                max-width: 100%;
            }

            .form-control,
            .form-select {
                border: none !important;
                padding: 0 !important;
                background-color: transparent !important;
                appearance: none;
                -webkit-appearance: none;
            }

            .input-group-text {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="nota-container">
            <div class="row mb-4 align-items-center">
                <div class="col-7">
                    <img src="img/Logo_Clean.webp" alt="Logo" class="mb-2" style="max-height: 70px;">
                    <div class="sucursal-info">
                        <h5 class="fw-bold mb-0">MUEBLERÍA Y ALFOMBRAS PROFESIONAL</h5>
                        <p class="mb-0 text-muted"><strong>SUCURSAL MATRIZ:</strong> Celaya Gto 301, Álamos</p>
                        <p class="mb-0 text-muted small">Tel: (461) 123 4567 | Celaya, Guanajuato.</p>
                    </div>
                </div>
                <div class="col-5">
                    <div class="folio-box">
                        <div class="text-uppercase small fw-bold">Nota de Venta</div>
                        <div class="h5 mb-0 text-danger fw-bold" id="folioDisplay">---</div>
                        <div class="small text-muted" id="fechaDisplay"></div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row mb-4 g-3">
                <div class="col-md-5">
                    <label class="form-label fw-bold text-uppercase small text-muted mb-0">Cliente:</label>
                    <input type="text" class="form-control form-control-sm border-0 border-bottom rounded-0" placeholder="Nombre completo">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold text-uppercase small text-muted mb-0">Dirección de Entrega:</label>
                    <input type="text" class="form-control form-control-sm border-0 border-bottom rounded-0" placeholder="Calle, número, colonia">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold text-uppercase small text-muted mb-0">Método de Pago:</label>
                    <select class="form-select form-select-sm border-0 border-bottom rounded-0 bg-light">
                        <option value="Efectivo">Efectivo</option>
                        <option value="Tarjeta de Crédito">Tarjeta de Crédito</option>
                        <option value="Tarjeta de Débito">Tarjeta de Débito</option>
                        <option value="Transferencia">Transferencia</option>
                        <option value="Cheque">Cheque</option>
                    </select>
                </div>
            </div>

            <div class="card mb-4 no-print border-primary bg-light">
                <div class="card-body">
                    <h6 class="card-title fw-bold mb-3"><i class="bi bi-cart-plus-fill me-2"></i>Añadir Artículos</h6>
                    <form id="productForm" class="row g-2 align-items-end">
                        <div class="col-md-4">
                            <label class="small fw-bold">Producto</label>
                            <select id="productSelect" class="form-select form-select-sm" required>
                                <option value="" selected disabled>Seleccionar...</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="small fw-bold">Precio Unit.</label>
                            <input type="number" id="unitPrice" class="form-control form-control-sm" step="any">
                        </div>
                        <div class="col-md-2" id="qtyWrapper">
                            <label class="small fw-bold">Cantidad</label>
                            <input type="number" id="productQty" class="form-control form-control-sm" value="1" min="1">
                        </div>
                        <div class="col-md-2 d-none" id="carpetDimensions">
                            <div class="row g-1">
                                <div class="col-6">
                                    <label class="small fw-bold">Ancho</label>
                                    <input type="number" id="carpetWidth" class="form-control form-control-sm" step="0.01" value="1.00">
                                </div>
                                <div class="col-6">
                                    <label class="small fw-bold">Largo</label>
                                    <input type="number" id="carpetLength" class="form-control form-control-sm" step="0.01" value="1.00">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary btn-sm w-100">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>

            <table class="table table-bordered align-middle" id="quoteTable">
                <thead class="table-dark">
                    <tr class="small text-center">
                        <th style="width: 45%;">Descripción del Artículo</th>
                        <th>Cant.</th>
                        <th>Precio Unit.</th>
                        <th>Subtotal</th>
                        <th class="no-print" style="width: 50px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="emptyRow">
                        <td colspan="5" class="text-center py-4 text-muted small">No hay productos registrados en esta nota.</td>
                    </tr>
                </tbody>
            </table>

            <div class="row mt-5">
                <div class="col-7">
                    <div class="p-3 bg-light rounded small mb-4" style="border-left: 4px solid var(--primary-color);">
                        <strong>Términos y Condiciones:</strong>
                        <ul class="mb-0 ps-3">
                            <li>Las medidas de alfombras y persianas son preliminares.</li>
                            <li>Vigencia de precios: 15 días naturales.</li>
                            <li>Garantía de 15 días.</li>
                        </ul>
                    </div>
                    <div class="text-center mt-5">
                        <div class="signature-line"></div>
                        <div class="small fw-bold text-uppercase mt-2">Firma del Cliente</div>
                    </div>
                </div>
                <div class="col-5">
                    <table class="table table-sm table-borderless">
                        <tr>
                            <td class="text-end text-muted">Subtotal:</td>
                            <td class="text-end fw-bold" id="displaySubtotal">$0.00</td>
                        </tr>
                        <tr class="no-print">
                            <td class="text-end text-muted small">
                                <input class="form-check-input me-1" type="checkbox" id="discountToggle"> Desc. (%):
                            </td>
                            <td class="text-end">
                                <input type="number" id="discountInput" class="form-control form-control-sm d-inline-block text-end" style="width: 70px;" value="0" min="0">
                            </td>
                        </tr>
                        <tr id="rowDiscount" style="display:none">
                            <td class="text-end text-danger small">Descuento aplicado:</td>
                            <td class="text-end text-danger fw-bold" id="displayDiscount">-$0.00</td>
                        </tr>
                        <tr>
                            <td class="text-end text-muted">
                                <span class="no-print"><input class="form-check-input me-1" type="checkbox" id="ivaToggleMaster" checked></span> IVA (16%):
                            </td>
                            <td class="text-end fw-bold" id="displayIVA">$0.00</td>
                        </tr>
                        <tr class="border-top border-dark">
                            <td class="text-end fw-bold h4">TOTAL:</td>
                            <td class="text-end fw-bold h4 text-primary" id="displayTotal">$0.00</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="text-center mt-4 no-print">
                <button class="btn btn-dark px-5 py-2 me-2" onclick="window.print()">
                    <i class="bi bi-printer-fill me-2"></i>Imprimir Nota de Venta
                </button>
                <button class="btn btn-outline-danger px-4 py-2" onclick="location.reload()">
                    <i class="bi bi-arrow-counterclockwise me-2"></i>Nueva Nota
                </button>
            </div>
        </div>
    </div>

    <script>
        // Configuración de Productos
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
                name: "Sala L",
                price: 900.00,
                category: "Sillones"
            },
            {
                id: 7,
                name: "Colchón Individual",
                price: 600.00,
                category: "Descanso"
            },
            {
                id: 8,
                name: "Colchón Matrimonial",
                price: 700.00,
                category: "Descanso"
            },
            {
                id: 9,
                name: "Colchón Queen",
                price: 800.00,
                category: "Descanso"
            },
            {
                id: 10,
                name: "Colchón King",
                price: 900.00,
                category: "Descanso"
            },
            {
                id: 11,
                name: "Cabecera Individual",
                price: 400.00,
                category: "Cabeceras"
            },
            {
                id: 12,
                name: "Cabecera Matrimonial",
                price: 450.00,
                category: "Cabeceras"
            },
            {
                id: 13,
                name: "Cabecera Queen",
                price: 500.00,
                category: "Cabeceras"
            },
            {
                id: 14,
                name: "Cabecera King",
                price: 550.00,
                category: "Cabeceras"
            },
            {
                id: 15,
                name: "Base Individual",
                price: 380.00,
                category: "Bases"
            },
            {
                id: 16,
                name: "Base Matrimonial",
                price: 480.00,
                category: "Bases"
            },
            {
                id: 17,
                name: "Base Queen",
                price: 480.00,
                category: "Bases"
            },
            {
                id: 18,
                name: "Base King",
                price: 580.00,
                category: "Bases"
            },
            {
                id: 19,
                name: "Alfombra",
                price: 185.00,
                category: "Alfombras",
                isByArea: true
            },
            {
                id: 20,
                name: "3 Plazas XL",
                price: 750.00,
                category: "Sillones"
            },
            {
                id: 21,
                name: "2 Plazas XL",
                price: 650.00,
                category: "Bases"
            },
            {
                id: 22,
                name: "Cojin Adicional",
                price: 45.00,
                category: "Cojines"
            },
            {
                id: 23,
                name: "Persianas",
                price: 110.00,
                category: "Alfombras",
                isByArea: true
            }
        ];

        let items = [];
        let idCounter = 0;

        // Generar Folio Automático (YYYYMMDDHHMMSS)
        function generateFolio() {
            const now = new Date();
            const folio = now.getFullYear().toString() +
                (now.getMonth() + 1).toString().padStart(2, '0') +
                now.getDate().toString().padStart(2, '0') +
                now.getHours().toString().padStart(2, '0') +
                now.getMinutes().toString().padStart(2, '0') +
                now.getSeconds().toString().padStart(2, '0');

            document.getElementById('folioDisplay').textContent = folio;
            document.getElementById('fechaDisplay').textContent = now.toLocaleDateString('es-MX', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
        }

        function init() {
            generateFolio();
            const select = document.getElementById('productSelect');
            products.forEach(p => {
                const opt = document.createElement('option');
                opt.value = p.id;
                opt.textContent = p.name;
                select.appendChild(opt);
            });

            select.addEventListener('change', (e) => {
                const p = products.find(prod => prod.id == e.target.value);
                document.getElementById('unitPrice').value = p.price;
                document.getElementById('carpetDimensions').classList.toggle('d-none', !p.isByArea);
                document.getElementById('qtyWrapper').classList.toggle('d-none', p.isByArea);
            });

            document.getElementById('productForm').addEventListener('submit', addItem);
            document.getElementById('discountInput').addEventListener('input', calculate);
            document.getElementById('discountToggle').addEventListener('change', calculate);
            document.getElementById('ivaToggleMaster').addEventListener('change', calculate);
        }

        function addItem(e) {
            e.preventDefault();
            const pId = document.getElementById('productSelect').value;
            const pBase = products.find(p => p.id == pId);
            const price = parseFloat(document.getElementById('unitPrice').value);

            let newItem = {
                ...pBase,
                uniqueId: idCounter++,
                finalUnitPrice: price
            };

            if (pBase.isByArea) {
                const w = parseFloat(document.getElementById('carpetWidth').value) || 1;
                const l = parseFloat(document.getElementById('carpetLength').value) || 1;
                newItem.qty = 1;
                newItem.area = w * l;
                newItem.dims = `${w}m x ${l}m`;
                newItem.total = newItem.area * price;
            } else {
                newItem.qty = parseInt(document.getElementById('productQty').value) || 1;
                newItem.total = newItem.qty * price;
            }

            items.push(newItem);
            render();
            document.getElementById('productForm').reset();
            document.getElementById('carpetDimensions').classList.add('d-none');
            document.getElementById('qtyWrapper').classList.remove('d-none');
        }

        function removeItem(id) {
            items = items.filter(i => i.uniqueId !== id);
            render();
        }

        function render() {
            const tbody = document.querySelector('#quoteTable tbody');
            tbody.innerHTML = items.length ? '' : '<tr id="emptyRow"><td colspan="5" class="text-center py-4 text-muted small">No hay productos registrados en esta nota.</td></tr>';

            items.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                <td>
                    <div class="fw-bold">${item.name}</div>
                    ${item.isByArea ? `<small class="text-muted"><i class="bi bi-rulers"></i> Medida: ${item.dims} (${item.area.toFixed(2)} m²)</small>` : ''}
                </td>
                <td class="text-center">${item.qty}</td>
                <td class="text-end">$${item.finalUnitPrice.toLocaleString()} ${item.isByArea ? '<small>/m²</small>' : ''}</td>
                <td class="text-end fw-bold">$${item.total.toLocaleString()}</td>
                <td class="text-center no-print">
                    <button class="btn btn-link text-danger p-0" onclick="removeItem(${item.uniqueId})"><i class="bi bi-x-circle"></i></button>
                </td>
            `;
                tbody.appendChild(row);
            });
            calculate();
        }

        function calculate() {
            const subtotal = items.reduce((acc, i) => acc + i.total, 0);
            const hasDiscount = document.getElementById('discountToggle').checked;
            const discPerc = parseFloat(document.getElementById('discountInput').value) || 0;
            const discount = hasDiscount ? (subtotal * (discPerc / 100)) : 0;

            const base = subtotal - discount;
            const hasIva = document.getElementById('ivaToggleMaster').checked;
            const iva = hasIva ? (base * 0.16) : 0;
            const total = base + iva;

            document.getElementById('displaySubtotal').textContent = format(subtotal);
            document.getElementById('rowDiscount').style.display = hasDiscount ? 'table-row' : 'none';
            document.getElementById('displayDiscount').textContent = `-${format(discount)}`;
            document.getElementById('displayIVA').textContent = format(iva);
            document.getElementById('displayTotal').textContent = format(total);
        }

        function format(n) {
            return new Intl.NumberFormat('es-MX', {
                style: 'currency',
                currency: 'MXN'
            }).format(n);
        }

        init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>