@extends('layouts.app')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card mt-5">
                <div class="card-header">
                    <h3 class="card-title">Stock Paint</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" value="IMRON FP WHITE" readonly class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="200">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" value="IMRON FP BLACK" readonly class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="200">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" value="IMRON 4:1 GRAY" readonly class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="200">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" value="PROTHANE BLACK" readonly class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="200">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" value="PROTHANE OXFORD WHITE" readonly class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="200">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" value="PROTHANE SEMI-GLOSS BLACK" readonly class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="200">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" value="IMRON JLG ORANGE" readonly class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="200">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" value="MOTHANE SAFETY RED" readonly class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="200">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" value="RIVAL SOUTHWEST BLUE" readonly class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="200">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" value="IMRON PHOENIX YELLOW" readonly class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="200">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Update Price</button>
                    </div>
                </div>
            </div>
        
        <div class="col-6">
            <div class="card mt-5">
                <div class="card-header">
                    <h3 class="card-title">Primer</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" value="MOPOXY" readonly class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="200">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" value="TUFFCOTE" readonly class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="200">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" value="MACROPOXY" readonly class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="200">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" value="ZINC PRIMER" readonly class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="200">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Update Price</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection