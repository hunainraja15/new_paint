@extends('layouts.app')
@section('body')

<div class="page-wrapper">
    <div class="container-xl mt-5">
        <div class="row g-2 align-items-center">
            <div class="col">
              <!-- Page pre-title -->
              
              <h2 class="page-title">
                Jobs
              </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
              <div class="btn-list">
                <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                  <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
                  Create new Job
                </a>
                <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                  <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
                </a>
              </div>
            </div>
          </div>
        <div class="card mt-3">
            <div class="card-body">
                <div id="table-default" class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th><button class="table-sort" data-sort="sort-name">Job #</button></th>
                                <th><button class="table-sort" data-sort="sort-city">Company Name</button></th>
                                <th><button class="table-sort" data-sort="sort-type">Description</button></th>
                            </tr>
                        </thead>
                        <tbody class="table-tbody">
                            <tr class="text-center">
                                <td class="sort-date" data-date="1559333540">#828282</td>
                                <td class="sort-quantity">Lorem ipsum dolor</td>
                                <td class="sort-progress" data-progress="64">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime, cumque.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
