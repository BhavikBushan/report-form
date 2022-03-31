@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
     <div class="col-md-12">
     <button class="btn bg-secondary w-25 justify-content-end mb-3 text-light" onclick="window.print()" style=" text-align : center">Save Report As PDF</button>
     </div>
        <div class="col-md-12">
            <div class="card">
           
                <div class="card-header text-center" style="font-weight: bolder;">{{ __('Health, Safety,Quality and Environmental Site Inspection') }}</div>
              
                <div class="card-body">

                    <div class="row">
                        <table class="table table-bordered striped">

                            <tbody>
                                <tr>

                                    <td>
                                        <h5 style="font-weight: bolder;">Site :</h5>
                                    </td>
                                    <td>
                                        {{$report->site_name}}
                                    </td>
                                    <td>
                                        <h5 style="font-weight: bolder;">Completed By :</h5>
                                    </td>
                                    <td>
                                        {{$report->completed_by}}
                                    </td>
                                    <td>
                                        <h5 style="font-weight: bolder;">Date</h5>
                                    </td>
                                    <td>
                                        {{$report->date_inspected}}
                                    </td>

                                </tr>
                                <tr>

                                    <td>
                                        <h5 style="font-weight: bolder;">Work Area :</h5>
                                    </td>
                                    <td>
                                        {{$report->work_area}}
                                    </td>
                                    <td>
                                        <h5 style="font-weight: bolder;">Job Description :</h5>
                                    </td>
                                    <td style="border: none;">
                                        {{$report->job_description}}
                                    </td>

                                </tr>
                                <tr>

                                    <td>
                                        <h5 style="font-weight: bolder;">Supervisor :</h5>
                                    </td>
                                    <td>
                                        {{$report->supervisor}}
                                    </td>
                                    <td>
                                        <h5 style="font-weight: bolder;">Inspector :</h5>
                                    </td>
                                    <td>
                                        {{$report->inspector}}
                                    </td>
                                    <td>
                                        <h5 style="font-weight: bolder;">Type :</h5>
                                    </td>
                                    <td>
                                        {{$report->type}}
                                    </td>
                                </tr>

                            </tbody>


                        </table>
                        <table class="table table-bordered striped">

                            <thead>
                                <tr>
                                    <th></th>
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
                                    <td class="text-center">
                                        {{$report->wah_intervention}}
                                    </td>
                                    <td>
                                        {{$report->wah_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->wah_completed}}
                                    </td>
                                    <td>
                                        {{$report->wah_action}}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        2. Lifting Operations- Crane, Fork Lift Truck, Hoist
                                    </td>

                                    <td class="text-center">
                                        {{$report->lo_intervention}}
                                    </td>
                                    <td>
                                        {{$report->lo_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->lo_completed}}
                                    </td>
                                    <td>
                                        {{$report->lo_action}}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        3. Certification- Daily Checksheets for MEWP and FLP
                                    </td>

                                    <td class="text-center">
                                        {{$report->cet_intervention}}
                                    </td>
                                    <td>
                                        {{$report->cet_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->cet_completed}}
                                    </td>
                                    <td>
                                        {{$report->cet_action}}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        4. Confined Space Work
                                    </td>

                                    <td class="text-center">
                                        {{$report->con_intervention}}
                                    </td>
                                    <td>
                                        {{$report->con_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->con_completed}}
                                    </td>
                                    <td>
                                        {{$report->con_action}}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        5. Electrical Work
                                    </td>

                                    <td class="text-center">
                                        {{$report->el_intervention}}
                                    </td>
                                    <td>
                                        {{$report->el_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->el_completed}}
                                    </td>
                                    <td>
                                        {{$report->el_action}}
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

                                    <td class="text-center">
                                        {{$report->st_intervention}}
                                    </td>
                                    <td>
                                        {{$report->st_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->st_completed}}
                                    </td>
                                    <td>
                                        {{$report->st_action}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7. Paperwork ( Permits, Risk Assessment, Method Statement)
                                    </td>

                                    <td class="text-center">
                                        {{$report->pw_intervention}}
                                    </td>
                                    <td>
                                        {{$report->pw_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->pw_completed}}
                                    </td>
                                    <td>
                                        {{$report->pw_action}}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        8. Certification - Training, Insuarance Inspection, Induction Current
                                    </td>

                                    <td class="text-center">
                                        {{$report->ct_intervention}}
                                    </td>
                                    <td>
                                        {{$report->ct_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->ct_completed}}
                                    </td>
                                    <td>
                                        {{$report->ct_action}}
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

                                    <td class="text-center">
                                        {{$report->sr_intervention}}
                                    </td>
                                    <td>
                                        {{$report->sr_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->sr_completed}}
                                    </td>
                                    <td>
                                        {{$report->sr_action}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        10. Isolation and Lock Offs
                                    </td>

                                    <td class="text-center">
                                        {{$report->iso_intervention}}
                                    </td>
                                    <td>
                                        {{$report->iso_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->iso_completed}}
                                    </td>
                                    <td>
                                        {{$report->iso_action}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        11. Fire Exits and Escape Routes
                                    </td>

                                    <td class="text-center">
                                        {{$report->fr_intervention}}
                                    </td>
                                    <td>
                                        {{$report->fr_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->fr_completed}}
                                    </td>
                                    <td>
                                        {{$report->fr_action}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        12. Awareness - Fire Exit, Assembly Point
                                    </td>

                                    <td class="text-center">
                                        {{$report->aw_intervention}}
                                    </td>
                                    <td>
                                        {{$report->aw_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->aw_completed}}
                                    </td>
                                    <td>
                                        {{$report->aw_action}}
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

                                    <td class="text-center">
                                        {{$report->wm_intervention}}
                                    </td>
                                    <td>
                                        {{$report->wm_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->wm_completed}}
                                    </td>
                                    <td>
                                        {{$report->wm_action}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        14. Product Contamination
                                    </td>

                                    <td class="text-center">
                                        {{$report->pc_intervention}}
                                    </td>
                                    <td>
                                        {{$report->pc_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->pc_completed}}
                                    </td>
                                    <td>
                                        {{$report->pc_action}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        15. COSHH and Asbestos
                                    </td>

                                    <td class="text-center">
                                        {{$report->ca_intervention}}
                                    </td>
                                    <td>
                                        {{$report->ca_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->ca_completed}}
                                    </td>
                                    <td>
                                        {{$report->ca_action}}
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

                                    <td class="text-center">
                                        {{$report->pp_intervention}}
                                    </td>
                                    <td>
                                        {{$report->pp_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->pp_completed}}
                                    </td>
                                    <td>
                                        {{$report->pp_action}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        17. Manual Handling
                                    </td>

                                    <td class="text-center">
                                        {{$report->mh_intervention}}
                                    </td>
                                    <td>
                                        {{$report->mh_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->mh_completed}}
                                    </td>
                                    <td>
                                        {{$report->mh_action}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        18. Other Contractors
                                    </td>

                                    <td class="text-center">
                                        {{$report->oc_intervention}}
                                    </td>
                                    <td>
                                        {{$report->oc_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->oc_completed}}
                                    </td>
                                    <td>
                                        {{$report->oc_action}}
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

                                    <td class="text-center">
                                        {{$report->pt_intervention}}
                                    </td>
                                    <td>
                                        {{$report->pt_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->pt_completed}}
                                    </td>
                                    <td>
                                        {{$report->pt_action}}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        20. Voltage Detector Checked
                                    </td>

                                    <td class="text-center">
                                        {{$report->vd_intervention}}
                                    </td>
                                    <td>
                                        {{$report->vd_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->vd_completed}}
                                    </td>
                                    <td>
                                        {{$report->vd_action}}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        21. Tools Used for fit purpose
                                    </td>

                                    <td class="text-center">
                                        {{$report->tu_intervention}}
                                    </td>
                                    <td>
                                        {{$report->tu_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->tu_completed}}
                                    </td>
                                    <td>
                                        {{$report->tu_action}}
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

                                    <td class="text-center">
                                        {{$report->vc_intervention}}
                                    </td>
                                    <td>
                                        {{$report->vc_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->vc_completed}}
                                    </td>
                                    <td>
                                        {{$report->vc_action}}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        23. Vehicle Log Sheet Up to Date
                                    </td>

                                    <td class="text-center">
                                        {{$report->vl_intervention}}
                                    </td>
                                    <td>
                                        {{$report->vl_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->vl_completed}}
                                    </td>
                                    <td>
                                        {{$report->vl_action}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        24. Vehicle Service Records
                                    </td>

                                    <td class="text-center">
                                        {{$report->vs_intervention}}
                                    </td>
                                    <td>
                                        {{$report->vs_comment}}
                                    </td>
                                    <td class="text-center">
                                        {{$report->vs_completed}}
                                    </td>
                                    <td>
                                        {{$report->vs_action}}
                                    </td>
                                </tr>

                            </tbody>


                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered stripped">
                                <tr>
                                    <td>
                                        <h4>Total Intervention By Section</h4>
                                    </td>
                                    <td class="text-center">
                                        <h4 >Totals</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        A. Work Station
                                    </td>
                                    <td class="text-center">
                                        {{ $report->wah_intervention + $report->lo_intervention + $report->cet_intervention + $report->con_intervention + $report->el_intervention}}
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        B. Quality
                                    </td>
                                    <td class="text-center">
                                        {{ $report->st_intervention + $report->pw_intervention + $report->ct_intervention }}
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        C. Site Rules
                                    </td>
                                    <td class="text-center">
                                        {{ $report->sr_intervention + $report->iso_intervention + $report->fr_intervention + $report->aw_intervention}}
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        D. Environmental
                                    </td>
                                    <td class="text-center">
                                        {{ $report->wm_intervention + $report->pc_intervention + $report->ca_intervention}}
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        E. Protection of Individuals
                                    </td>
                                    <td class="text-center">
                                        {{ $report->oc_intervention + $report->mh_intervention + $report->pp_intervention}}
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        F. Tools, Cables, and Other Equipment
                                    </td>
                                    <td class="text-center">
                                        {{ $report->pt_intervention + $report->vd_intervention + $report->tu_intervention}}
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        G. Miscellaneous
                                    </td>
                                    <td class="text-center">
                                        {{ $report->vc_intervention + $report->vl_intervention + $report->vs_intervention}}
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <h4>Overall</h4>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('tt_overal') is-invalid @enderror text-center" name="tt_overal" value="{{$report->vc_intervention + $report->vl_intervention + $report->vs_intervention + $report->pt_intervention + $report->vd_intervention + $report->tu_intervention + $report->oc_intervention + $report->mh_intervention + $report->pp_intervention + $report->oc_intervention + $report->mh_intervention + $report->pp_intervention + $report->wah_intervention + $report->lo_intervention + $report->cet_intervention + $report->con_intervention + $report->el_intervention + $report->st_intervention + $report->pw_intervention + $report->ct_intervention + $report->sr_intervention + $report->iso_intervention + $report->fr_intervention + $report->aw_intervention }}" required disabled>
                                    </td>

                                </tr>
                            </table>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection