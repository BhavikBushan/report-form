@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Health, Safety,Quality and Environmental Site Inspection') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('reports.update', $report->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-4">

                                <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Site Name') }}</label>

                                <input type="text" class="form-control @error('site_name') is-invalid @enderror" name="site_name" value="{{ $report->site_name }}" autocomplete="site_name">

                                @error('site_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Work Area') }}</label>

                                <input type="text" class="form-control @error('work_area') is-invalid @enderror" name="work_area" value="{{ $report->work_area }}"  autocomplete="work_area">

                                @error('work_area')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Supervisor') }}</label>

                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="supervisor" value="{{ $report->supervisor }}"  autocomplete="supervisor">

                                @error('supervisor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="col-md-4">

                                <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Completed By') }}</label>

                                <input type="text" class="form-control @error('completed_by') is-invalid @enderror" name="completed_by" value="{{$report->completed_by}}"  autocomplete="completed_by">

                                @error('completed_by')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Job Description') }}</label>

                                <input type="text" class="form-control @error('job_description') is-invalid @enderror" name="job_description" value="{{ $report->job_description }}"  autocomplete="job_description">

                                @error('job_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Inspector') }}</label>

                                <input type="text" class="form-control @error('inspector') is-invalid @enderror" name="inspector" value="{{$report->inspector}}" autocomplete="inspector" >

                                @error('inspector')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-4">

                                <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Date') }}</label>

                                <input type="text" class="form-control @error('date_inspected') is-invalid @enderror" name="date_inspected" value="{{ $report->date_inspected }}" autocomplete="date_inspected">

                                @error('date_inspected')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Type') }}</label>

                                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $report->type }}"  autocomplete="type">

                                @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                        </div>


                        <hr>
                        <table class="table table-bordered striped">

                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Interventions</th>
                                    <th>Comments</th>
                                    <th>Completed</th>
                                    <th>Action Taken</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <h4>A. Working Standards</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        1. Work At Height
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('wah_intervention') is-invalid @enderror" name="wah_intervention" value="{{ $report->wah_intervention }}"  autocomplete="wah_intervention">
                                        @error('wah_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('wah_comment') is-invalid @enderror" name="wah_comment" value="{{ $report->wah_comment }}"  autocomplete="wah_comment">
                                        @error('wah_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('wah_completed') is-invalid @enderror" name="wah_completed" value="{{ $report->wah_completed }}"  autocomplete="wah_completed">
                                        @error('wah_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('wah_action') is-invalid @enderror" name="wah_action" value="{{ $report->wah_action }}"  autocomplete="wah_action">
                                        @error('wah_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        2. Lifting Operations- Crane, Fork Lift Truck, Hoist
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('lo_intervention') is-invalid @enderror" name="lo_intervention" value="{{ $report->lo_intervention }}"  autocomplete="lo_intervention">
                                        @error('lo_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('lo_comment') is-invalid @enderror" name="lo_comment" value="{{ $report->lo_comment }}"  autocomplete="lo_comment">
                                        @error('lo_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('lo_completed') is-invalid @enderror" name="lo_completed" value="{{ $report->lo_completed }}"  autocomplete="lo_completed">
                                        @error('lo_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('lo_action') is-invalid @enderror" name="lo_action" value="{{ $report->lo_action }}"  autocomplete="lo_action">
                                        @error('lo_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        3. Certification- Daily Checksheets for MEWP and FLP
                                    </td>
                                    <td>
                                        <input id="cet_intervention" type="text" class="form-control @error('cet_intervention') is-invalid @enderror" name="cet_intervention" value="{{ $report->cet_intervention }}"  autocomplete="cet_intervention">
                                        @error('cet_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('cet_comment') is-invalid @enderror" name="cet_comment" value="{{ $report->cet_comment }}"  autocomplete="cet_comment">
                                        @error('cet_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input id="cet_comment" type="text" class="form-control @error('cet_completed') is-invalid @enderror" name="cet_completed" value="{{ $report->cet_comment }}" >
                                        @error('cet_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input id="cet_action" type="text" class="form-control @error('cet_action') is-invalid @enderror" name="cet_action" value="{{ $report->cet_action }}" >
                                        @error('cet_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        4. Confined Space Work
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('con_intervention') is-invalid @enderror" name="con_intervention" value="{{ $report->con_intervention}}" >
                                        @error('con_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('con_comment') is-invalid @enderror" name="con_comment" value="{{ $report->con_comment}}" >
                                        @error('con_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('con_completed') is-invalid @enderror" name="con_completed" value="{{ $report->con_completed}}" >
                                        @error('con_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('con_action') is-invalid @enderror" name="con_action" value="{{ $report->con_action}}" >
                                        @error('con_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        5. Electrical Work
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('el_intervention') is-invalid @enderror" name="el_intervention" value="{{ $report->el_intervention}}" >
                                        @error('el_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('el_comment') is-invalid @enderror" name="el_comment" value="{{ $report->el_comment}}" >
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('el_completed') is-invalid @enderror" name="el_completed" value="{{ $report->el_completed}}" >
                                        @error('el_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('el_action') is-invalid @enderror" name="el_action" value="{{ $report->el_action}}" >
                                        @error('el_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>B. Quality</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6. Site Setup and Appearance, Signage
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('st_intervention') is-invalid @enderror" name="st_intervention" value="{{ $report->st_intervention}}" >
                                        @error('st_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('st_comment') is-invalid @enderror" name="st_comment" value="{{ $report->st_comment}}" >
                                        @error('st_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('st_comleted') is-invalid @enderror" name="st_completed" value="{{ $report->st_completed}}" >
                                        @error('st_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('st_action') is-invalid @enderror" name="st_action" value="{{ $report->st_action}}" >
                                        @error('st_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7. Paperwork ( Permits, Risk Assessment, Method Statement)
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('pw_intervention') is-invalid @enderror" name="pw_intervention" value="{{ $report->pw_intervention}}" >
                                        @error('pw_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('pw_comment') is-invalid @enderror" name="pw_comment" value="{{ $report->pw_comment}}" >
                                        @error('pw_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('pw_completed') is-invalid @enderror" name="pw_completed" value="{{ $report->pw_completed}}" >
                                        @error('pw_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('pw_action') is-invalid @enderror" name="pw_action" value="{{ $report->pw_action}}" >
                                        @error('pw_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        8. Certification - Training, Insuarance Inspection, Induction Current
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('ct_intervention') is-invalid @enderror" name="ct_intervention" value="{{ $report->ct_intervention}}" >
                                        @error('ct_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('ct_comment') is-invalid @enderror" name="ct_comment" value="{{ $report->cet_comment}}" >
                                        @error('ct_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('ct_completed') is-invalid @enderror" name="ct_completed" value="{{ $report->ct_completed}}" >
                                        @error('ct_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('ct_action') is-invalid @enderror" name="ct_action" value="{{ $report->ct_action}}" >
                                        @error('ct_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>


                                </tr>

                                <tr>
                                    <td>
                                        <h4>C. Site Rules</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        9. Hot Work
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('sr_intervention') is-invalid @enderror" name="sr_intervention" value="{{ $report->sr_intervention}}" >
                                        @error('sr_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('sr_comment') is-invalid @enderror" name="sr_comment" value="{{ $report->sr_comment}}" >
                                        @error('st_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('sr_completed') is-invalid @enderror" name="sr_completed" value="{{ $report->sr_completed}}" >
                                        @error('sr_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('sr_action') is-invalid @enderror" name="sr_action" value="{{ $report->sr_action}}" >                                    
                                        @error('sr_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        10. Isolation and Lock Offs
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('iso_intervention') is-invalid @enderror" name="iso_intervention" value="{{ $report->iso_intervention}}" >
                                    
                                        @error('iso_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('iso_comment') is-invalid @enderror" name="iso_comment" value="{{ $report->iso_comment}}" >
                                    
                                        @error('isso-comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('iso_completed') is-invalid @enderror" name="iso_completed" value="{{ $report->iso_completed}}" >
                                        @error('iso_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('iso_action') is-invalid @enderror" name="iso_action" value="{{ $report->iso_action}}" >
                                        @error('iso_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        11. Fire Exits and Escape Routes
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('fr_intervention') is-invalid @enderror" name="fr_intervention" value="{{ $report->fr_intervention}}" >
                                        @error('fr_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('fr_comment') is-invalid @enderror" name="fr_comment" value="{{ $report->fr_comment}}" >
                                        @error('fr_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('fr_completed') is-invalid @enderror" name="fr_completed" value="{{ $report->fr_completed}}" >
                                        @error('fr_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('fr_action') is-invalid @enderror" name="fr_action" value="{{ $report->fr_action}}" >
                                        @error('fr_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        12. Awareness - Fire Exit, Assembly Point
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('aw_intervention') is-invalid @enderror" name="aw_intervention" value="{{ $report->aw_intervention}}" >
                                        @error('aw_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('aw_comment') is-invalid @enderror" name="aw_comment" value="{{ $report->aw_comment}}" >
                                        @error('aw_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('aw_completed') is-invalid @enderror" name="aw_completed" value="{{ $report->aw_completed}}" >
                                        @error('aw_completetd')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('aw_action') is-invalid @enderror" name="aw_action" value="{{ $report->aw_action}}" >
                                        @error('aw_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>D. Environmental</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        13. Waste Management
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('wm_intervention') is-invalid @enderror" name="wm_intervention" value="{{ $report->wm_intervention}}" >
                                        @error('wm_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('wm_comment') is-invalid @enderror" name="wm_comment" value="{{ $report->wm_comment}}" >
                                        @error('wm_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('wm_completed') is-invalid @enderror" name="wm_completed" value="{{ $report->wm_completed}}" >
                                        @error('wm_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('wm_action') is-invalid @enderror" name="wm_action" value="{{ $report->wm_action}}" >
                                        @error('wm_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        14. Product Contamination
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('pc_intervention') is-invalid @enderror" name="pc_intervention" value="{{ $report->pc_intervention}}" >
                                        @error('pc_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('pc_comment') is-invalid @enderror" name="pc_comment" value="{{ $report->pc_comment}}" >
                                        @error('pc_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('pc_completed') is-invalid @enderror" name="pc_completed" value="{{ $report->pc_completed}}" >
                                        @error('pc_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('pc_action') is-invalid @enderror" name="pc_action" value="{{ $report->pc_action}}" >
                                        @error('pc_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        15. COSHH and Asbestos
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('ca_intervention') is-invalid @enderror" name="ca_intervention" value="{{ $report->ca_intervention}}" >
                                        @error('ca_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('ca_comment') is-invalid @enderror" name="ca_comment" value="{{ $report->ca_comment}}" >
                                        @error('ca_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('ca_completed') is-invalid @enderror" name="ca_completed" value="{{ $report->ca_completed}}" >
                                        @error('ca_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('ca_action') is-invalid @enderror" name="ca_action" value="{{ $report->ca_action}}" >
                                        @error('ca_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>E. Protection of Individuals</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        16. PPE
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('pp_intervention') is-invalid @enderror" name="pp_intervention" value="{{ $report->pp_intervention}}" >
                                        @error('pp_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('pp_comment') is-invalid @enderror" name="pp_comment" value="{{ $report->pp_comment}}" >
                                        @error('pp_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('pp_completed') is-invalid @enderror" name="pp_completed" value="{{ $report->pp_completed}}" >
                                        @error('pp_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('pp_action') is-invalid @enderror" name="pp_action" value="{{ $report->pp_action}}" >
                                        @error('pp_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        17. Manual Handling
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('mh_intervention') is-invalid @enderror" name="mh_intervention" value="{{ $report->mh_intervention}}" >
                                        @error('mh_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('mh_comment') is-invalid @enderror" name="mh_comment" value="{{ $report->mh_comment}}" >
                                        @error('mh_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('mh_completed') is-invalid @enderror" name="mh_completed" value="{{ $report->mh_completed}}" >
                                        @error('mh_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('mh_action') is-invalid @enderror" name="mh_action" value="{{ $report->mh_action}}" >
                                        @error('mh_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        18. Other Contractors
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('oc_intervention') is-invalid @enderror" name="oc_intervention" value="{{ $report->oc_intervention}}" >
                                        @error('oc_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror                                 
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('oc_comment') is-invalid @enderror" name="oc_comment" value="{{ $report->oc_comment}}" >
                                        @error('oc_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('oc_completed') is-invalid @enderror" name="oc_completed" value="{{ $report->oc_completed}}" >
                                        @error('oc_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('oc_action') is-invalid @enderror" name="oc_action" value="{{ $report->oc_action}}" >
                                        @error('oc_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>F. Tools, Cables and Other Equipment</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        19. Power Tools, Cables and Other Equipment
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('pt_intervention') is-invalid @enderror" name="pt_intervention" value="{{ $report->pt_intervention}}" >
                                        @error('pt_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('pt_comment') is-invalid @enderror" name="pt_comment" value="{{ $report->pt_comment}}" >
                                        @error('pt_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('pt_completed') is-invalid @enderror" name="pt_completed" value="{{ $report->pt_completed}}" >
                                        @error('pt_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('pt_action') is-invalid @enderror" name="pt_action" value="{{ $report->pt_action}}" >
                                        @error('pt_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        20. Voltage Detector Checked
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('vd_intervention') is-invalid @enderror" name="vd_intervention" value="{{ $report->vd_intervention}}" >
                                        @error('vd_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('vd_comment') is-invalid @enderror" name="vd_comment" value="{{ $report->vd_comment}}" >
                                        @error('vd_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('vd_completed') is-invalid @enderror" name="vd_completed" value="{{ $report->vd_completed}}" >
                                        @error('vd_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('vd_action') is-invalid @enderror" name="vd_action" value="{{ $report->vd_action}}" >
                                        @error('vd_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        21. Tools Used for fit purpose
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('tu_intervention') is-invalid @enderror" name="tu_intervention" value="{{ $report->tu_intervention}}" >
                                        @error('tu_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('tu_completed') is-invalid @enderror" name="tu_completed" value="{{ $report->tu_completed}}" >
                                        @error('tu_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('tu_comment') is-invalid @enderror" name="tu_comment" value="{{ $report->tu_comment}}" >
                                        @error('tu_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('tu_action') is-invalid @enderror" name="tu_action" value="{{ $report->tu_action}}" >
                                        @error('tu_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>G. Miscellaneous</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        22. Vehicle Condition
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('vc_intervention') is-invalid @enderror" name="vc_intervention" value="{{ $report->vc_intervention}}" >
                                        @error('vc_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('vc_comment') is-invalid @enderror" name="vc_comment" value="{{ $report->vc_comment}}" >
                                        @error('vc_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('vc_completed') is-invalid @enderror" name="vc_completed" value="{{ $report->vc_completed}}" >
                                        @error('vc_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('vc_action') is-invalid @enderror" name="vc_action" value="{{ $report->vc_action}}" >
                                        @error('vc_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        23. Vehicle Log Sheet Up to Date
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('vl_intervention') is-invalid @enderror" name="vl_intervention" value="{{ $report->vl_intervention}}" >
                                        @error('vl_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('vl_comment') is-invalid @enderror" name="vl_comment" value="{{ $report->vl_comment}}" >
                                        @error('vl_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('vl_completed') is-invalid @enderror" name="vl_completed" value="{{ $report->vl_completed}}" >
                                        @error('vl_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('vl_action') is-invalid @enderror" name="vl_action" value="{{ $report->vl_action}}" >
                                        @error('vl_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        24. Vehicle Service Records
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('vs_intervention') is-invalid @enderror" name="vs_intervention" value="{{ $report->vs_intervention}}" >
                                        @error('vs_intervention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('vs_comment') is-invalid @enderror" name="vs_comment" value="{{ $report->vs_comment}}" >
                                    
                                        @error('vs_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror</td>
                                    <td>
                                        <input type="text" class="form-control @error('vs_completed') is-invalid @enderror" name="vs_completed" value="{{ $report->vs_completed}}" >
                                        @error('vs_completed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('vs_action') is-invalid @enderror" name="vs_action" value="{{ $report->vs_action}}" >
                                        @error('vs_action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </td>
                                </tr>

                            </tbody>


                        </table>
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-bordered stripped">
                                    <tr>
                                        <td>
                                            <h4>Total Intervention By Section</h4>
                                        </td>
                                        <td>
                                            <h4>Totals</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            A. Work Station
                                        </td>
                                        <td>
                                            <input type="text" class="form-control @error('tt_work_station') is-invalid @enderror" name="tt_work_station" value="0" readonly>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            B. Quality
                                        </td>
                                        <td>
                                            <input type="text" class="form-control @error('tt_quality') is-invalid @enderror" name="tt_quality" value="0" readonly>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            C. Site Rules
                                        </td>
                                        <td>
                                            <input type="text" class="form-control @error('tt_site_rules') is-invalid @enderror" name="tt_site_rules" value="0" readonly>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            D. Environmental
                                        </td>
                                        <td>
                                            <input type="text" class="form-control @error('tt_environment') is-invalid @enderror" name="tt_environment" value="0" readonly>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            E. Protection of Individuals
                                        </td>
                                        <td>
                                            <input type="text" class="form-control @error('tt_p_individuals') is-invalid @enderror" name="tt_p_individuals" value="0" readonly>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            F. Tools, Cables, and Other Equipment
                                        </td>
                                        <td>
                                            <input type="text" class="form-control @error('tt_tools') is-invalid @enderror" name="tt_tools" value="0" readonly>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            G. Miscellaneous
                                        </td>
                                        <td>
                                            <input type="text" class="form-control @error('tt_miscellaneous') is-invalid @enderror" name="tt_miscellaneous" value="0"  readonly>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>Overall</h4>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control @error('tt_overal') is-invalid @enderror" name="tt_overal" value="0" readonly>
                                        </td>

                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6 offset-md-12 ">
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Update Report') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection