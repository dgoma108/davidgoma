<section class="mb-5" id="forms">
    <h2>Forms</h2>

    <div class="card p-5">
        <form>
            <div class="mb-5">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-5">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-5">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-5">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-5 form-group">
                <label class="form-label">Teléfono</label>
                <div class="form-icon">
                    {{-- <svg class="form-icon-left icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg> --}}
                    <span class="form-icon-left icon"><i class="fa-solid fa-phone"></i></span>
                    <input type="tel" class="form-control" placeholder="+34 600 000 000">
                </div>
            </div>
            <div class="mb-5 form-group">
                <label class="form-label">Doble!! Buscar con filtros</label>
                <div class="form-icon">
                    <!-- Icono izquierdo -->
                    <span class="form-icon-left icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <!-- Input con padding en ambos lados -->
                    <input type="text" class="form-control" placeholder="Buscar productos..." style="padding-left: 3rem; padding-right: 3rem;">
                    <!-- Icono derecho -->
                    <span class="form-icon-right icon"><i class="fa-solid fa-filter"></i></span>
                </div>
            </div>
            <div class="mb-5 row row-cols-1 row-cols-md-2 g-3 needs-validation">
                <div class="">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                    <div class="valid-feedback">Looks good!</div>
                </div>
                <div class="">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                    <div class="invalid-feedback">Please choose a username.</div>
                </div>
            </div>
            <div class="mb-5">
                <label for="customRange1" class="form-label">Example range</label>
                <input type="range" class="form-range" id="customRange1">
            </div>
            <div class="mb-5 form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switchCheckChecked" checked>
                <label class="form-check-label" for="switchCheckChecked">Checked switch checkbox input</label>
            </div>
            <div class="mb-5">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-5 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <div class="">
                <button type="cancel" class="btn btn btn-secondary">Cancel</button>
                <button type="submit" class="ms-3 btn btn-primary">Submit</button>
            </div>
            <div class="text-end">
                <button type="cancel" class="btn-sm btn btn-secondary">Cancel</button>
                <button type="submit" class="ms-3 btn-sm btn-social btn-github">Submit</button>
            </div>
        </form>
        <hr>
        <div class="row g-3">
        <div class="col-md-6">
            <form action="" class="form-card bg-light">
                <div class="form-header">
                    <div class="form-title">Título</div>
                    <div class="form-subtitle">Entrada de datos</div>
                </div>
                <div class="form-inline">
                    <div class="form-group">
                        <label class="form-label">Teléfono</label>
                        <div class="form-icon">
                            {{-- <svg class="form-icon-left icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg> --}}
                            <span class="form-icon-left icon"><i class="fa-solid fa-phone"></i></span>
                            <input type="tel" class="form-control" placeholder="+34 600 000 000">
                        </div>
                    </div>
                    <button type="submit" class="ms-3 btn btn-primary">Submit</button>
                </div>
                <div class="form-footer">
                    <div class="form-links"><a href="#forms">Ir a forms</a></div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <form action="" class="form-card bg-light ">
                <div class="form-header">
                    <div class="form-title">Título</div>
                    <div class="form-subtitle">Entrada de datos</div>
                </div>
                <div class="form-inline form-loading">
                    <div class="form-group">
                        <label class="form-label">Teléfono</label>
                        <div class="form-icon">
                            {{-- <svg class="form-icon-left icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg> --}}
                            <span class="form-icon-left icon"><i class="fa-solid fa-phone"></i></span>
                            <input type="tel" class="form-control" placeholder="+34 600 000 000">
                        </div>
                    </div>
                    <button type="submit" class="ms-3 btn btn-primary">Submit</button>
                </div>
                <div class="form-footer">
                    <div class="form-links"><a href="#forms">Ir a forms</a></div>
                </div>
            </form>
        </div>
        </div>
    </div>

</section>
