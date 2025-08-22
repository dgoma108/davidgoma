<x-layouts.docs>

<x-slot:title>Tables - Modern Bootstrap Extension</x-slot:title>

<x-slot:styles>
<style>
/* Estilos específicos para la documentación de tables */
.tables-demo {
    background: #f8fafc;
    border: 1px solid #e5e7eb;
    border-radius: 0.5rem;
    padding: 1.5rem;
    margin: 1rem 0;
    overflow-x: auto;
}

.demo-container-dark {
    background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
    border-radius: 0.5rem;
    padding: 2rem;
    color: white;
}

/* Tablas demo mejoradas */
.demo-table {
    width: 100%;
    margin-bottom: 1.5rem;
    color: #111827;
    border-collapse: collapse;
    background: white;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    transition: all 0.3s ease;
}

.demo-table th,
.demo-table td {
    padding: 0.875rem 1rem;
    text-align: left;
    border-bottom: 1px solid #e5e7eb;
    vertical-align: middle;
    transition: all 0.15s ease;
}

.demo-table thead th {
    background: #f3f4f6;
    color: #374151;
    font-weight: 600;
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 0.025em;
    border-bottom: 2px solid #d1d5db;
    position: sticky;
    top: 0;
    z-index: 10;
}

.demo-table tbody tr {
    transition: all 0.15s ease;
}

.demo-table tbody tr:last-child td {
    border-bottom: none;
}

.demo-table tfoot th,
.demo-table tfoot td {
    background: #f3f4f6;
    font-weight: 600;
    border-top: 2px solid #d1d5db;
    border-bottom: none;
}

/* Variantes de tabla demo */
.demo-table-hover tbody tr:hover {
    background: #f1f5f9;
    transform: scale(1.001);
    box-shadow: inset 0 0 0 1px rgba(59, 130, 246, 0.1);
}

.demo-table-striped tbody tr:nth-child(even) {
    background: #f9fafb;
}

.demo-table-bordered {
    border: 1px solid #e5e7eb;
}

.demo-table-bordered th,
.demo-table-bordered td {
    border: 1px solid #e5e7eb;
}

.demo-table-sm th,
.demo-table-sm td {
    padding: 0.5rem 0.75rem;
    font-size: 0.875rem;
}

.demo-table-lg th,
.demo-table-lg td {
    padding: 1rem 1.5rem;
    font-size: 1.125rem;
}

/* Estados de filas */
.demo-table .table-row-active,
.demo-table tbody tr.active {
    background: #e2e8f0;
    color: #1e293b;
}

.demo-table .table-row-success,
.demo-table tbody tr.success {
    background: #d1fae5;
}

.demo-table .table-row-warning,
.demo-table tbody tr.warning {
    background: #fef3c7;
}

.demo-table .table-row-error,
.demo-table tbody tr.error {
    background: #fee2e2;
}

.demo-table .table-row-info,
.demo-table tbody tr.info {
    background: #dbeafe;
}

/* Componentes adicionales */
.table-status {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
}

.table-status::before {
    content: '';
    width: 8px;
    height: 8px;
    border-radius: 50%;
    flex-shrink: 0;
}

.table-status.status-active::before { background: #10b981; }
.table-status.status-inactive::before { background: #6b7280; }
.table-status.status-warning::before { background: #f59e0b; }
.table-status.status-error::before { background: #ef4444; }

.table-avatar {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.table-avatar .avatar {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #e5e7eb;
}

.table-avatar .avatar-placeholder {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #6366f1;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    font-size: 0.875rem;
}

.table-actions {
    display: flex;
    gap: 0.5rem;
    align-items: center;
    justify-content: flex-end;
}

.table-actions .btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    min-width: auto;
}

/* Tabla sortable */
.demo-table-sortable th {
    cursor: pointer;
    user-select: none;
    position: relative;
}

.demo-table-sortable th:hover {
    background: #e5e7eb;
}

.demo-table-sortable th.sort-asc::after {
    content: '↑';
    position: absolute;
    right: 0.5rem;
    color: #6366f1;
}

.demo-table-sortable th.sort-desc::after {
    content: '↓';
    position: absolute;
    right: 0.5rem;
    color: #6366f1;
}

/* Loading states */
.table-shimmer {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: tableShimmer 1.5s infinite;
    border-radius: 0.25rem;
    height: 1rem;
    margin: 0.25rem 0;
}

@keyframes tableShimmer {
    0% { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}

.table-shimmer.w-75 { width: 75%; }
.table-shimmer.w-50 { width: 50%; }
.table-shimmer.w-25 { width: 25%; }

/* Responsive demo */
.demo-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    border-radius: 1rem;
}

.demo-responsive .demo-table {
    margin-bottom: 0;
    border-radius: 0;
    box-shadow: none;
    min-width: 600px;
}

/* Mobile stack demo */
@media (max-width: 767px) {
    .demo-table-mobile thead {
        display: none;
    }

    .demo-table-mobile tbody,
    .demo-table-mobile tr,
    .demo-table-mobile td {
        display: block;
        width: 100%;
    }

    .demo-table-mobile tr {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 0.5rem;
        margin-bottom: 1rem;
        padding: 1rem;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
    }

    .demo-table-mobile td {
        border: none;
        border-bottom: 1px solid #e5e7eb;
        position: relative;
        padding-left: 40%;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    .demo-table-mobile td:last-child {
        border-bottom: none;
    }

    .demo-table-mobile td:before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        top: 0.5rem;
        width: 35%;
        font-weight: 600;
        color: #6b7280;
        font-size: 0.875rem;
    }
}

/* Dark mode demo */
.demo-table-dark {
    background: #1f2937;
    color: #f9fafb;
}

.demo-table-dark thead th {
    background: #374151;
    color: #f9fafb;
    border-bottom-color: #4b5563;
}

.demo-table-dark tbody tr {
    border-bottom-color: #374151;
}

.demo-table-dark tbody tr:hover {
    background: #374151;
}

.demo-table-dark tbody tr:nth-child(even) {
    background: #374151;
}

/* Pricing demo específico */
.pricing-demo {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 0.5rem;
    padding: 2rem;
    color: white;
}

.pricing-table {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 1rem;
}

.pricing-table thead th {
    background: rgba(255, 255, 255, 0.1);
    color: white;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

.pricing-table tbody td {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.9);
}

/* Analytics demo */
.analytics-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin: 1rem 0;
}

.metric-card {
    background: white;
    border-radius: 1rem;
    padding: 1.5rem;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    border: none;
    transition: transform 0.3s ease;
}

.metric-card:hover {
    transform: translateY(-4px);
}

.metric-value {
    font-size: 2rem;
    font-weight: 800;
    color: #6366f1;
    margin: 0.5rem 0;
}

.metric-change {
    font-size: 0.875rem;
    font-weight: 600;
}

.metric-change.positive {
    color: #10b981;
}

.metric-change.negative {
    color: #ef4444;
}

/* E-commerce demo */
.product-image {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border-radius: 0.5rem;
}

.product-info {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.stock-badge {
    padding: 0.25rem 0.5rem;
    border-radius: 9999px;
    font-size: 0.75rem;
    font-weight: 600;
}

.stock-high {
    background: #d1fae5;
    color: #065f46;
}

.stock-medium {
    background: #fef3c7;
    color: #92400e;
}

.stock-low {
    background: #fee2e2;
    color: #991b1b;
}

/* Utilities */
.text-nowrap { white-space: nowrap; }
.text-truncate {
    max-width: 150px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* Badge personalizado para demos */
.demo-badge {
    display: inline-block;
    padding: 0.25rem 0.5rem;
    font-size: 0.75rem;
    font-weight: 600;
    border-radius: 9999px;
    text-align: center;
    white-space: nowrap;
}

.demo-badge-primary { background: #dbeafe; color: #1e40af; }
.demo-badge-success { background: #d1fae5; color: #065f46; }
.demo-badge-warning { background: #fef3c7; color: #92400e; }
.demo-badge-danger { background: #fee2e2; color: #991b1b; }
.demo-badge-secondary { background: #f3f4f6; color: #374151; }

/* Responsive mejoras */
@media (max-width: 768px) {
    .tables-demo {
        padding: 1rem;
        margin: 0.5rem 0;
    }

    .analytics-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
}
</style>
</x-slot:styles>

<!-- Header de la página -->
<div class="docs-header">
    <h1 class="display-5">Tables</h1>
    <p class="lead text-muted">Sistema completo de tablas modernas con diseño mejorado, funcionalidades avanzadas, responsive design y componentes especializados para datos empresariales.</p>
</div>

<!-- Navigation Tabs -->
<ul class="nav nav-pills mb-4" id="tables-tabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="basic-tab" data-bs-toggle="pill" data-bs-target="#basic" type="button" role="tab">Tablas Básicas</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="variants-tab" data-bs-toggle="pill" data-bs-target="#variants" type="button" role="tab">Variantes</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="responsive-tab" data-bs-toggle="pill" data-bs-target="#responsive" type="button" role="tab">Responsive</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="components-tab" data-bs-toggle="pill" data-bs-target="#components" type="button" role="tab">Componentes</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="advanced-tab" data-bs-toggle="pill" data-bs-target="#advanced" type="button" role="tab">Funcionalidades</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="examples-tab" data-bs-toggle="pill" data-bs-target="#examples" type="button" role="tab">Ejemplos</button>
    </li>
</ul>

<div class="tab-content" id="tables-content">

    <!-- Basic Tables Tab -->
    <div class="tab-pane fade show active" id="basic" role="tabpanel">
        <h2>Tablas Básicas Mejoradas</h2>
        <p>Las tablas básicas incluyen mejoras visuales significativas: sombras modernas, bordes redondeados, mejor spacing y transiciones fluidas.</p>

        <div class="tables-demo">
            <table class="demo-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Estado</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="table-avatar">
                                <div class="avatar-placeholder">AM</div>
                                <span>Ana Martín</span>
                            </div>
                        </td>
                        <td>ana.martin@empresa.com</td>
                        <td><span class="demo-badge demo-badge-primary">Smartphones</span></td>
                        <td>45</td>
                        <td>$1,199</td>
                    </tr>
                    <tr>
                        <td>#002</td>
                        <td>MacBook Air</td>
                        <td><span class="demo-badge demo-badge-secondary">Laptops</span></td>
                        <td>23</td>
                        <td>$1,299</td>
                    </tr>
                    <tr>
                        <td>#003</td>
                        <td>AirPods Pro</td>
                        <td><span class="demo-badge demo-badge-success">Audio</span></td>
                        <td>67</td>
                        <td>$249</td>
                    </tr>
                    <tr>
                        <td>#004</td>
                        <td>iPad Pro</td>
                        <td><span class="demo-badge demo-badge-warning">Tablets</span></td>
                        <td>12</td>
                        <td>$799</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;table class="table table-striped"&gt;
  &lt;!-- Filas alternas con color de fondo --&gt;
&lt;/table&gt;</code></pre>
        </div>

        <h3>Tabla con Bordes</h3>
        <div class="tables-demo">
            <table class="demo-table demo-table-bordered">
                <thead>
                    <tr>
                        <th>País</th>
                        <th>Capital</th>
                        <th>Población</th>
                        <th>Continente</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>España</td>
                        <td>Madrid</td>
                        <td>47.4M</td>
                        <td>Europa</td>
                    </tr>
                    <tr>
                        <td>Francia</td>
                        <td>París</td>
                        <td>67.4M</td>
                        <td>Europa</td>
                    </tr>
                    <tr>
                        <td>Brasil</td>
                        <td>Brasilia</td>
                        <td>215.3M</td>
                        <td>América del Sur</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;table class="table table-bordered"&gt;
  &lt;!-- Bordes en todas las celdas --&gt;
&lt;/table&gt;

&lt;table class="table table-borderless"&gt;
  &lt;!-- Sin bordes --&gt;
&lt;/table&gt;</code></pre>
        </div>

        <h3>Estados de Filas</h3>
        <div class="tables-demo">
            <table class="demo-table">
                <thead>
                    <tr>
                        <th>Tarea</th>
                        <th>Asignado</th>
                        <th>Progreso</th>
                        <th>Prioridad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row-success">
                        <td>Diseño completado</td>
                        <td>Ana García</td>
                        <td>100%</td>
                        <td><span class="demo-badge demo-badge-success">Alta</span></td>
                    </tr>
                    <tr class="table-row-warning">
                        <td>Revisión pendiente</td>
                        <td>Carlos López</td>
                        <td>75%</td>
                        <td><span class="demo-badge demo-badge-warning">Media</span></td>
                    </tr>
                    <tr class="table-row-error">
                        <td>Corrección urgente</td>
                        <td>María Silva</td>
                        <td>25%</td>
                        <td><span class="demo-badge demo-badge-danger">Crítica</span></td>
                    </tr>
                    <tr class="table-row-info">
                        <td>Documentación</td>
                        <td>Juan Martín</td>
                        <td>50%</td>
                        <td><span class="demo-badge demo-badge-primary">Baja</span></td>
                    </tr>
                    <tr class="table-row-active">
                        <td>En desarrollo activo</td>
                        <td>Laura Chen</td>
                        <td>80%</td>
                        <td><span class="demo-badge demo-badge-secondary">Media</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;!-- Estados disponibles para filas --&gt;
&lt;tr class="table-row-success"&gt;...&lt;/tr&gt;  &lt;!-- Verde: completado/éxito --&gt;
&lt;tr class="table-row-warning"&gt;...&lt;/tr&gt;  &lt;!-- Amarillo: advertencia --&gt;
&lt;tr class="table-row-error"&gt;...&lt;/tr&gt;    &lt;!-- Rojo: error/crítico --&gt;
&lt;tr class="table-row-info"&gt;...&lt;/tr&gt;     &lt;!-- Azul: información --&gt;
&lt;tr class="table-row-active"&gt;...&lt;/tr&gt;   &lt;!-- Gris: activo/seleccionado --&gt;</code></pre>
        </div>

        <h3>Tabla Ordenable</h3>
        <div class="tables-demo">
            <table class="demo-table demo-table-sortable">
                <thead>
                    <tr>
                        <th class="sort-desc" onclick="toggleSort(this)">Nombre ↓</th>
                        <th onclick="toggleSort(this)">Edad</th>
                        <th onclick="toggleSort(this)">Departamento</th>
                        <th class="sort-asc" onclick="toggleSort(this)">Salario ↑</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alejandra Ruiz</td>
                        <td>28</td>
                        <td>Desarrollo</td>
                        <td>$85,000</td>
                    </tr>
                    <tr>
                        <td>Bruno Mendoza</td>
                        <td>34</td>
                        <td>Marketing</td>
                        <td>$75,000</td>
                    </tr>
                    <tr>
                        <td>Carolina Vega</td>
                        <td>31</td>
                        <td>Diseño</td>
                        <td>$72,000</td>
                    </tr>
                    <tr>
                        <td>Diego Santos</td>
                        <td>29</td>
                        <td>Desarrollo</td>
                        <td>$88,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;table class="table table-sortable"&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th class="sort-asc"&gt;Nombre&lt;/th&gt;    &lt;!-- Ordenado ascendente --&gt;
      &lt;th class="sort-desc"&gt;Fecha&lt;/th&gt;   &lt;!-- Ordenado descendente --&gt;
      &lt;th&gt;Otro campo&lt;/th&gt;              &lt;!-- Sin ordenar --&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
&lt;/table&gt;</code></pre>
        </div>
    </div>

    <!-- Responsive Tab -->
    <div class="tab-pane fade" id="responsive" role="tabpanel">
        <h2>Tablas Responsive</h2>

        <h3>Tabla Responsive Básica</h3>
        <p>Scroll horizontal automático cuando el contenido no cabe en pantalla.</p>

        <div class="tables-demo">
            <div class="demo-responsive">
                <table class="demo-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre Completo</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Empresa</th>
                            <th>Departamento</th>
                            <th>Cargo</th>
                            <th>Fecha Inicio</th>
                            <th>Salario</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#001</td>
                            <td>Ana María García López</td>
                            <td>ana.garcia@empresa.com</td>
                            <td>+34 600 123 456</td>
                            <td>TechCorp Solutions</td>
                            <td>Desarrollo Frontend</td>
                            <td>Senior Developer</td>
                            <td>15 Ene 2022</td>
                            <td>$85,000</td>
                            <td><span class="table-status status-active">Activo</span></td>
                            <td>
                                <div class="table-actions">
                                    <button class="btn btn-outline-primary btn-sm">✏️</button>
                                    <button class="btn btn-outline-secondary btn-sm">👁️</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#002</td>
                            <td>Carlos Rodríguez Martín</td>
                            <td>carlos.rodriguez@empresa.com</td>
                            <td>+34 600 654 321</td>
                            <td>InnovateLab Inc</td>
                            <td>Marketing Digital</td>
                            <td>Marketing Manager</td>
                            <td>20 Mar 2021</td>
                            <td>$72,000</td>
                            <td><span class="table-status status-active">Activo</span></td>
                            <td>
                                <div class="table-actions">
                                    <button class="btn btn-outline-primary btn-sm">✏️</button>
                                    <button class="btn btn-outline-secondary btn-sm">👁️</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="table-responsive"&gt;
  &lt;table class="table"&gt;
    &lt;!-- Tabla con scroll horizontal automático --&gt;
  &lt;/table&gt;
&lt;/div&gt;

&lt;!-- Responsive en breakpoints específicos --&gt;
&lt;div class="table-responsive-sm"&gt;...&lt;/div&gt; &lt;!-- &lt; 576px --&gt;
&lt;div class="table-responsive-md"&gt;...&lt;/div&gt; &lt;!-- &lt; 768px --&gt;
&lt;div class="table-responsive-lg"&gt;...&lt;/div&gt; &lt;!-- &lt; 992px --&gt;</code></pre>
        </div>

        <h3>Tabla Mobile Stack</h3>
        <p>En dispositivos móviles, las filas se convierten en cards apiladas para mejor legibilidad.</p>

        <div class="tables-demo">
            <table class="demo-table demo-table-mobile">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Producto">
                            <div class="product-info">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%236366f1'/%3E%3Ctext x='50' y='50' text-anchor='middle' dy='0.35em' fill='white' font-family='Arial, sans-serif' font-size='12'%3EiPhone%3C/text%3E%3C/svg%3E" class="product-image" alt="iPhone">
                                <div>
                                    <div style="font-weight: 600;">iPhone 15 Pro</div>
                                    <small class="text-muted">128GB - Titanio Natural</small>
                                </div>
                            </div>
                        </td>
                        <td data-label="Precio">$1,199.00</td>
                        <td data-label="Stock"><span class="stock-badge stock-medium">23 unidades</span></td>
                        <td data-label="Estado"><span class="table-status status-active">Disponible</span></td>
                        <td data-label="Acciones">
                            <div class="table-actions">
                                <button class="btn btn-outline-primary btn-sm">✏️ Editar</button>
                                <button class="btn btn-outline-secondary btn-sm">👁️ Ver</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Producto">
                            <div class="product-info">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%2310b981'/%3E%3Ctext x='50' y='50' text-anchor='middle' dy='0.35em' fill='white' font-family='Arial, sans-serif' font-size='10'%3EMacBook%3C/text%3E%3C/svg%3E" class="product-image" alt="MacBook">
                                <div>
                                    <div style="font-weight: 600;">MacBook Air M3</div>
                                    <small class="text-muted">512GB - Plata</small>
                                </div>
                            </div>
                        </td>
                        <td data-label="Precio">$1,499.00</td>
                        <td data-label="Stock"><span class="stock-badge stock-low">5 unidades</span></td>
                        <td data-label="Estado"><span class="table-status status-warning">Pocas existencias</span></td>
                        <td data-label="Acciones">
                            <div class="table-actions">
                                <button class="btn btn-outline-primary btn-sm">✏️ Editar</button>
                                <button class="btn btn-outline-secondary btn-sm">👁️ Ver</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;table class="table table-mobile"&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;Nombre&lt;/th&gt;
      &lt;th&gt;Email&lt;/th&gt;
      &lt;th&gt;Estado&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td data-label="Nombre"&gt;Ana García&lt;/td&gt;
      &lt;td data-label="Email"&gt;ana@empresa.com&lt;/td&gt;
      &lt;td data-label="Estado"&gt;Activo&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
        </div>

        <div class="alert alert-info">
            <h4>📱 Funcionamiento Mobile Stack</h4>
            <ul class="mb-0">
                <li>En <strong>móvil</strong>: Headers ocultos, cada fila se convierte en card</li>
                <li>Atributo <code>data-label</code> se usa como etiqueta en móvil</li>
                <li><strong>Automático</strong>: Responsive sin configuración adicional</li>
                <li><strong>Accesible</strong>: Mantiene la semántica de tabla</li>
            </ul>
        </div>

        <h3>Comparación Responsive</h3>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="metric-card">
                    <h4>📊 Table Responsive</h4>
                    <ul>
                        <li><strong>Scroll horizontal</strong> cuando no cabe</li>
                        <li><strong>Mantiene estructura</strong> de tabla</li>
                        <li><strong>Ideal para:</strong> Muchas columnas</li>
                        <li><strong>UX:</strong> Familiar pero requiere scroll</li>
                    </ul>
                    <div class="mt-3">
                        <span class="demo-badge demo-badge-primary">Recomendado para desktop</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="metric-card">
                    <h4>📱 Table Mobile</h4>
                    <ul>
                        <li><strong>Cards apiladas</strong> en móvil</li>
                        <li><strong>Cambia estructura</strong> completamente</li>
                        <li><strong>Ideal para:</strong> Consumo de datos</li>
                        <li><strong>UX:</strong> Optimizada para touch</li>
                    </ul>
                    <div class="mt-3">
                        <span class="demo-badge demo-badge-success">Recomendado para móvil</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Components Tab -->
    <div class="tab-pane fade" id="components" role="tabpanel">
        <h2>Componentes de Tabla</h2>

        <h3>Avatar en Tabla</h3>
        <div class="tables-demo">
            <table class="demo-table">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th>Última conexión</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="table-avatar">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='50' fill='%236366f1'/%3E%3Ctext x='50' y='50' text-anchor='middle' dy='0.35em' fill='white' font-family='Arial, sans-serif' font-size='30' font-weight='bold'%3EAS%3C/text%3E%3C/svg%3E" class="avatar" alt="Avatar">
                                <div>
                                    <div style="font-weight: 600;">Ana Silva</div>
                                    <small class="text-muted">ana.silva@empresa.com</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="demo-badge demo-badge-primary">Administrador</span></td>
                        <td>Hace 5 minutos</td>
                        <td><span class="table-status status-active">En línea</span></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-avatar">
                                <div class="avatar-placeholder" style="background: #10b981;">JM</div>
                                <div>
                                    <div style="font-weight: 600;">Juan Martínez</div>
                                    <small class="text-muted">juan.martinez@empresa.com</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="demo-badge demo-badge-success">Editor</span></td>
                        <td>Hace 2 horas</td>
                        <td><span class="table-status status-warning">Ausente</span></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-avatar">
                                <div class="avatar-placeholder" style="background: #f59e0b;">LC</div>
                                <div>
                                    <div style="font-weight: 600;">Laura Castro</div>
                                    <small class="text-muted">laura.castro@empresa.com</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="demo-badge demo-badge-warning">Viewer</span></td>
                        <td>Ayer</td>
                        <td><span class="table-status status-inactive">Desconectado</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;td&gt;
  &lt;div class="table-avatar"&gt;
    &lt;img src="avatar.jpg" class="avatar" alt="Usuario"&gt;
    &lt;div&gt;
      &lt;div&gt;Nombre Usuario&lt;/div&gt;
      &lt;small class="text-muted"&gt;email@empresa.com&lt;/small&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/td&gt;

&lt;!-- Con placeholder --&gt;
&lt;td&gt;
  &lt;div class="table-avatar"&gt;
    &lt;div class="avatar-placeholder"&gt;AB&lt;/div&gt;
    &lt;span&gt;Nombre Usuario&lt;/span&gt;
  &lt;/div&gt;
&lt;/td&gt;</code></pre>
        </div>

        <h3>Indicadores de Estado</h3>
        <div class="tables-demo">
            <table class="demo-table">
                <thead>
                    <tr>
                        <th>Servicio</th>
                        <th>Estado</th>
                        <th>Uptime</th>
                        <th>Última revisión</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>API Gateway</td>
                        <td><span class="table-status status-active">Operativo</span></td>
                        <td>99.9%</td>
                        <td>Hace 1 minuto</td>
                    </tr>
                    <tr>
                        <td>Base de Datos</td>
                        <td><span class="table-status status-warning">Degradado</span></td>
                        <td>98.5%</td>
                        <td>Hace 15 minutos</td>
                    </tr>
                    <tr>
                        <td>Servicio de Email</td>
                        <td><span class="table-status status-error">Caído</span></td>
                        <td>85.2%</td>
                        <td>Hace 2 horas</td>
                    </tr>
                    <tr>
                        <td>CDN</td>
                        <td><span class="table-status status-active">Operativo</span></td>
                        <td>100%</td>
                        <td>Hace 30 segundos</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;span class="table-status status-active"&gt;Activo&lt;/span&gt;
&lt;span class="table-status status-inactive"&gt;Inactivo&lt;/span&gt;
&lt;span class="table-status status-warning"&gt;Advertencia&lt;/span&gt;
&lt;span class="table-status status-error"&gt;Error&lt;/span&gt;</code></pre>
        </div>

        <h3>Acciones de Tabla</h3>
        <div class="tables-demo">
            <table class="demo-table">
                <thead>
                    <tr>
                        <th>Documento</th>
                        <th>Tipo</th>
                        <th>Tamaño</th>
                        <th>Modificado</th>
                        <th width="150">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div style="width: 32px; height: 32px; background: #fee2e2; color: #dc2626; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 0.875rem;">
                                    📄
                                </div>
                                <div>
                                    <div style="font-weight: 600;">Propuesta_Comercial.pdf</div>
                                </div>
                            </div>
                        </td>
                        <td>PDF</td>
                        <td>2.4 MB</td>
                        <td>Hace 2 horas</td>
                        <td>
                            <div class="table-actions">
                                <button class="btn btn-outline-primary btn-sm" title="Descargar">⬇️</button>
                                <button class="btn btn-outline-secondary btn-sm" title="Compartir">🔗</button>
                                <button class="btn btn-outline-success btn-sm" title="Editar">✏️</button>
                                <button class="btn btn-outline-danger btn-sm" title="Eliminar">🗑️</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div style="width: 32px; height: 32px; background: #dcfce7; color: #16a34a; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 0.875rem;">
                                    📊
                                </div>
                                <div>
                                    <div style="font-weight: 600;">Reporte_Ventas_Q1.xlsx</div>
                                </div>
                            </div>
                        </td>
                        <td>Excel</td>
                        <td>890 KB</td>
                        <td>Ayer</td>
                        <td>
                            <div class="table-actions">
                                <button class="btn btn-outline-primary btn-sm" title="Descargar">⬇️</button>
                                <button class="btn btn-outline-secondary btn-sm" title="Compartir">🔗</button>
                                <button class="btn btn-outline-success btn-sm" title="Editar">✏️</button>
                                <button class="btn btn-outline-danger btn-sm" title="Eliminar">🗑️</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;td&gt;
  &lt;div class="table-actions"&gt;
    &lt;button class="btn btn-outline-primary btn-sm"&gt;Editar&lt;/button&gt;
    &lt;button class="btn btn-outline-secondary btn-sm"&gt;Ver&lt;/button&gt;
    &lt;button class="btn btn-outline-danger btn-sm"&gt;Eliminar&lt;/button&gt;
  &lt;/div&gt;
&lt;/td&gt;</code></pre>
        </div>

        <h3>Caption y Utilidades</h3>
        <div class="tables-demo">
            <table class="demo-table">
                <caption class="table-caption">
                    📈 Resumen de ventas del último trimestre
                    <br><small class="text-muted">Datos actualizados cada hora</small>
                </caption>
                <thead>
                    <tr>
                        <th class="text-left">Producto</th>
                        <th class="text-center">Vendidos</th>
                        <th class="text-right">Ingresos</th>
                        <th class="text-center w-min">Tendencia</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-nowrap">iPhone 15 Pro Max</td>
                        <td class="text-center">1,247</td>
                        <td class="text-right">$1,496,530</td>
                        <td class="text-center">📈</td>
                    </tr>
                    <tr>
                        <td class="text-truncate" style="max-width: 200px;" title="MacBook Pro 16 pprimary">Admin</span></td>
                        <td><span class="table-status status-active">Activo</span></td>
                        <td>
                            <div class="table-actions">
                                <button class="btn btn-outline-primary btn-sm">✏️</button>
                                <button class="btn btn-outline-secondary btn-sm">👁️</button>
                                <button class="btn btn-outline-danger btn-sm">🗑️</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-avatar">
                                <div class="avatar-placeholder" style="background: #10b981;">JL</div>
                                <span>Juan López</span>
                            </div>
                        </td>
                        <td>juan.lopez@empresa.com</td>
                        <td><span class="demo-badge demo-badge-success">Editor</span></td>
                        <td><span class="table-status status-active">Activo</span></td>
                        <td>
                            <div class="table-actions">
                                <button class="btn btn-outline-primary btn-sm">✏️</button>
                                <button class="btn btn-outline-secondary btn-sm">👁️</button>
                                <button class="btn btn-outline-danger btn-sm">🗑️</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-avatar">
                                <div class="avatar-placeholder" style="background: #f59e0b;">MC</div>
                                <span>María Chen</span>
                            </div>
                        </td>
                        <td>maria.chen@empresa.com</td>
                        <td><span class="demo-badge demo-badge-warning">Viewer</span></td>
                        <td><span class="table-status status-inactive">Inactivo</span></td>
                        <td>
                            <div class="table-actions">
                                <button class="btn btn-outline-primary btn-sm">✏️</button>
                                <button class="btn btn-outline-secondary btn-sm">👁️</button>
                                <button class="btn btn-outline-danger btn-sm">🗑️</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;!-- Tabla básica mejorada --&gt;
&lt;table class="table"&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;Nombre&lt;/th&gt;
      &lt;th&gt;Email&lt;/th&gt;
      &lt;th&gt;Estado&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;Ana Martín&lt;/td&gt;
      &lt;td&gt;ana@empresa.com&lt;/td&gt;
      &lt;td&gt;Activo&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
        </div>

        <h3>Mejoras Automáticas</h3>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="metric-card">
                    <h4>🎨 Visuales</h4>
                    <ul>
                        <li><strong>Sombras:</strong> Box-shadow suave y moderna</li>
                        <li><strong>Bordes:</strong> Border-radius XL (1rem)</li>
                        <li><strong>Overflow:</strong> Hidden para contenido limpio</li>
                        <li><strong>Headers sticky:</strong> Se mantienen visibles al scroll</li>
                        <li><strong>Transiciones:</strong> Efectos suaves en hover</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="metric-card">
                    <h4>📝 Tipografía</h4>
                    <ul>
                        <li><strong>Headers:</strong> Texto uppercase con mejor spacing</li>
                        <li><strong>Padding:</strong> Optimizado para legibilidad</li>
                        <li><strong>Font weights:</strong> Jerarquía visual clara</li>
                        <li><strong>Alineación:</strong> Vertical middle por defecto</li>
                        <li><strong>Colores:</strong> Contraste mejorado</li>
                    </ul>
                </div>
            </div>
        </div>

        <h3>Tamaños de Tablas</h3>
        <div class="tables-demo">
            <h5>Tabla Small</h5>
            <table class="demo-table demo-table-sm">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Auriculares</td>
                        <td>$79.99</td>
                        <td>156</td>
                    </tr>
                    <tr>
                        <td>Teclado</td>
                        <td>$129.99</td>
                        <td>89</td>
                    </tr>
                </tbody>
            </table>

            <h5>Tabla Large</h5>
            <table class="demo-table demo-table-lg">
                <thead>
                    <tr>
                        <th>Proyecto</th>
                        <th>Cliente</th>
                        <th>Progreso</th>
                        <th>Fecha límite</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rediseño Web</td>
                        <td>TechCorp Inc.</td>
                        <td>75%</td>
                        <td>25 Mar 2024</td>
                    </tr>
                    <tr>
                        <td>App Mobile</td>
                        <td>StartUp ABC</td>
                        <td>45%</td>
                        <td>15 Abr 2024</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;!-- Tamaños disponibles --&gt;
&lt;table class="table table-sm"&gt;...&lt;/table&gt;  &lt;!-- Padding reducido --&gt;
&lt;table class="table"&gt;...&lt;/table&gt;         &lt;!-- Padding estándar --&gt;
&lt;table class="table table-lg"&gt;...&lt;/table&gt; &lt;!-- Padding amplio --&gt;</code></pre>
        </div>

        <h3>Con Header y Footer</h3>
        <div class="tables-demo">
            <table class="demo-table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th class="text-right">Cantidad</th>
                        <th class="text-right">Precio Unit.</th>
                        <th class="text-right">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Laptop Pro</td>
                        <td class="text-right">2</td>
                        <td class="text-right">$1,299.99</td>
                        <td class="text-right">$2,599.98</td>
                    </tr>
                    <tr>
                        <td>Mouse Wireless</td>
                        <td class="text-right">3</td>
                        <td class="text-right">$49.99</td>
                        <td class="text-right">$149.97</td>
                    </tr>
                    <tr>
                        <td>Monitor 4K</td>
                        <td class="text-right">1</td>
                        <td class="text-right">$599.99</td>
                        <td class="text-right">$599.99</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">Subtotal</th>
                        <th class="text-right">$3,349.94</th>
                    </tr>
                    <tr>
                        <th colspan="3">Impuestos (21%)</th>
                        <th class="text-right">$703.49</th>
                    </tr>
                    <tr>
                        <th colspan="3">Total</th>
                        <th class="text-right" style="color: #6366f1; font-size: 1.125rem;">$4,053.43</th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;table class="table"&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;Producto&lt;/th&gt;
      &lt;th&gt;Precio&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;Item 1&lt;/td&gt;
      &lt;td&gt;$100&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
  &lt;tfoot&gt;
    &lt;tr&gt;
      &lt;th&gt;Total&lt;/th&gt;
      &lt;th&gt;$100&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/tfoot&gt;
&lt;/table&gt;</code></pre>
        </div>
    </div>

    <!-- Variants Tab -->
    <div class="tab-pane fade" id="variants" role="tabpanel">
        <h2>Variantes de Tablas</h2>

        <h3>Tabla con Hover</h3>
        <div class="tables-demo">
            <table class="demo-table demo-table-hover">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Último acceso</th>
                        <th>Sesiones</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="table-avatar">
                                <div class="avatar-placeholder">JS</div>
                                <span>Julia Silva</span>
                            </div>
                        </td>
                        <td>Hace 2 minutos</td>
                        <td>156</td>
                        <td><span class="table-status status-active">Online</span></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-avatar">
                                <div class="avatar-placeholder" style="background: #f59e0b;">RM</div>
                                <span>Roberto Morales</span>
                            </div>
                        </td>
                        <td>Hace 15 minutos</td>
                        <td>89</td>
                        <td><span class="table-status status-warning">Ausente</span></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="table-avatar">
                                <div class="avatar-placeholder" style="background: #10b981;">LC</div>
                                <span>Laura Castro</span>
                            </div>
                        </td>
                        <td>Hace 1 hora</td>
                        <td>234</td>
                        <td><span class="table-status status-active">Online</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;table class="table table-hover"&gt;
  &lt;!-- Efecto hover con elevación sutil --&gt;
&lt;/table&gt;</code></pre>
        </div>

        <h3>Tabla con Rayas</h3>
        <div class="tables-demo">
            <table class="demo-table demo-table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Categoría</th>
                        <th>Stock</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#001</td>
                        <td>iPhone 15 Pro</td>
                        <td><span class="demo-badge demo-badge- "></span></td></tr></tbody></table></div></div></div>
                    </x-layouts.docs>


