<!DOCTYPE html>
<html>
    <head>
        <title>Aplikasi Fuzzy Sugeno</title>
        <link rel="stylesheet" type="text/css" href="assets/styleHome.css">
    </head>
    <body>
        <div class="container my-5">
            <h1 class="text-center mb-4">Aplikasi Fuzzy Sugeno</h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="scripts/calculate.php" method="POST" class="card p-4 shadow">
                        <div class="mb-3">
                            <label for="minDemand" class="form-label">Permintaan Minimal:</label>
                            <input type="number" id="minDemand" name="minDemand" class="form-control" required>
                            <small class="form-text text-muted">*Nilai permintaan terendah selama periode tertentu.</small>
                        </div>
                        <div class="mb-3">
                            <label for="maxDemand" class="form-label">Permintaan Maksimal:</label>
                            <input type="number" id="maxDemand" name="maxDemand" class="form-control" required>
                            <small class="form-text text-muted">*Nilai permintaan tertinggi selama periode tertentu.</small>
                        </div>
                        <div class="mb-3">
                            <label for="minSupply" class="form-label">Persediaan Minimal:</label>
                            <input type="number" id="minSupply" name="minSupply" class="form-control" required>
                            <small class="form-text text-muted">*Nilai persediaan terendah yang diharapkan.</small>
                        </div>
                        <div class="mb-3">
                            <label for="maxSupply" class="form-label">Persediaan Maksimal:</label>
                            <input type="number" id="maxSupply" name="maxSupply" class="form-control" required>
                            <small class="form-text text-muted">*Nilai persediaan tertinggi yang diharapkan.</small>
                        </div>
                        <div class="mb-3">
                            <label for="minProduction" class="form-label">Produksi Minimal:</label>
                            <input type="number" id="minProduction" name="minProduction" class="form-control" required>
                            <small class="form-text text-muted">*Jumlah produksi minimal yang diharapkan.</small>
                        </div>
                        <div class="mb-3">
                            <label for="maxProduction" class="form-label">Produksi Maksimal:</label>
                            <input type="number" id="maxProduction" name="maxProduction" class="form-control" required>
                            <small class="form-text text-muted">*Jumlah produksi maksimal yang dapat dicapai.</small>
                        </div>
                        <div class="mb-3">
                            <label for="demand" class="form-label">Permintaan:</label>
                            <input type="number" id="demand" name="demand" class="form-control" required>
                            <small class="form-text text-muted">*Nilai permintaan saat ini.</small>
                        </div>
                        <div class="mb-3">
                            <label for="supply" class="form-label">Persediaan:</label>
                            <input type="number" id="supply" name="supply" class="form-control" required>
                            <small class="form-text text-muted">*Nilai persediaan saat ini.</small>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Hitung Produksi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
