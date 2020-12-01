<?php
 
 	function revenues() {	 return $revenues = \App\eco_revenue_performance_summary::all();	}

 	function total_rev() {	 return $total_rev = \App\eco_revenue_performance_summary::sum('total_actual');	}

 	function total_crude() {	 return $total_crude = \App\up_provisional_crude_production::sum('company_total');	}

 	function highest_crude() {	 return $highest_crude = \App\up_provisional_crude_production::max('company_total');	}

 	function lowest_crude() {	 return $lowest_crude = \App\up_provisional_crude_production::min('company_total');	}

 	function highest_per() {	 return $highest_per = \App\up_provisional_crude_production::max('percentage_production');	}

 	function lowest_per() {	 return $lowest_per = \App\up_provisional_crude_production::min('percentage_production');	}

 	function max_gas_flare() {	 return $max_gas_flare = \App\gas_summary_of_gas_production::max('total_gas_flared');	}

 	function min_gas_flare() {	 return $min_gas_flare = \App\gas_summary_of_gas_production::min('total_gas_flared');	}

 	function max_per_flare() {	 return $max_per_flare = \App\gas_summary_of_gas_production::max('percent_flared');	}

 	function min_per_flare() {	 return $min_per_flare = \App\gas_summary_of_gas_production::min('percent_flared');	}

 	function total_gas() {	 return $total_gas = \App\gas_summary_of_gas_production::sum('total');	}

 	function highest_rev() {	 return $highest_rev = \App\eco_revenue_performance_summary::max('total_actual');	}

 	function lowest_rev() {	 return $lowest_rev = \App\eco_revenue_performance_summary::min('total_actual');	}

 	function ave_rev() {	 return $ave_rev = \App\eco_revenue_performance_summary::avg('total_actual');	}

 	function total_block() {	 return $total_block = \App\Bala_block::sum('total_block');	}

 	function tot_opl_allo() {	 return $tot_opl_allo = \App\Bala_block::sum('opl_blocks_allocated');	}

 	function tot_oml_allo() {	 return $tot_oml_allo = \App\Bala_block::sum('oml_blocks_allocated');	}

 	function blocks_open() {	 return $blocks_open = \App\Bala_block::sum('blocks_open');	}

 	function blocks_allo() 
 	{	
 		$total_block = \App\Bala_block::sum('total_block'); 		$blocks_open = \App\Bala_block::sum('blocks_open');
 		return $blocks_allo = ($total_block - $blocks_open);	
 	}

 	function ref_prod_first() {	 return $ref_prod_first = \App\down_refinary_production::orderBy('year', 'asc')->first();	}

 	function ref_prod_last() {	 return $ref_prod_last = \App\down_refinary_production::orderBy('year', 'desc')->first();	}

 	function blocks() {	 return $blocks = \App\Bala_block::orderBy('year', 'asc')->get();	}

 	function terrains() {	 return $terrains = \App\Bala_block::distinct()->orderBy('terrain_id', 'asc')->get(['terrain_id']);	}

 	function ids() {	 return $ids = \App\Bala_block::distinct()->orderBy('id', 'asc')->get();	}

 	function _blocks() {	 return $_blocks = \App\Bala_block::distinct()->orderBy('year', 'asc')->get(['year']);	}

 	function tot_blocks() {	 return $tot_blocks = \App\Bala_block::sum('total_block');	}

 	function all_block() {	 return $all_block = \App\Bala_block::get();	}

 	function top_exports() {	 return $top_exports = \App\down_crude_export_by_destination::orderBy('volume_of_export', 'desc')->limit(5)->get();	}

 	function ave_crude_price() {	 return $ave_crude_price = \App\up_ave_price_crude_stream::orderBy('value', 'desc')->take(3)->get();	}

 	function marketers() {	 return $marketers = \App\down_licensed_oil_makerters::orderBy('storage_capacity', 'desc')->take(6)->get();	}

 	function oil_mark() {	 return $oil_mark = \App\down_licensed_oil_makerters::orderBy('storage_capacity', 'desc')->take(5)->get();	}

 	function outlets() {	 return $outlets = \App\down_outlet_storage_capacity::orderBy('value', 'desc')->take(5)->get();	}

 	function plants() {	 return $plants = \App\down_petrochemical_plant::orderBy('plant_capacity', 'desc')->take(5)->get();	}

 	function vol_import() {	 return $vol_import = \App\down_product_vol_import_permit::orderBy('total', 'desc')->take(5)->get();	}



 	// function Terrs() {	 return $Terrs = \App\terrain::orderBy('terrain_name', 'asc')->get();	}
	
	

 	function gas_res() {	 return $gas_res = \App\up_reserves_report::sum('total_gas');	}

 	function well_activities() 
 	{
 		$well_terrain = \App\up_well_activities_by_terrain::sum('total');
 		$well_class = \App\up_well_activities_by_class::sum('total');	
 		$well_contract = \App\up_well_activities_by_contract::sum('total');	
 		
 		return ($well_activities = $well_terrain + $well_class + $well_contract);
 	}

    function hi_capacity() {	 return $hi_capacity = \App\down_outlet_storage_capacity::orderBy('value', 'desc')->first();	}   

    function tot_mm() {	 return $major_marketers = \App\down_retail_outlet_summary::sum('major_marketers');	}  

    function tot_im() {	 return $independent_marketers = \App\down_retail_outlet_summary::sum('independent_marketers');	}  




 	function crude_exports() {	 return $crude_exports = \App\down_monthly_summary_crude_export::orderBy('stream_total', 'desc')->take(5)->get();	}

 	function ref_productions() {	 return $ref_productions = \App\down_refinary_production::orderBy('total', 'desc')->take(5)->get();	}

 	function pro_plants() {	   return $pro_plants = \App\gas_processing_plant_project::orderBy('design_capacity', 'desc')->take(5)->get();	}

 	function gas_productions() {	 return $gas_productions = \App\gas_summary_of_gas_production::orderBy('total_gas_utilized', 'desc')->take(5)->get();	}

 	function perf_supplies() {	 return $perf_supplies = \App\gas_domestic_gas_supply::orderBy('performance_supply', 'desc')->take(5)->get();	}
        

 	function down_incidences() {	 return $down_incidences = \App\she_accident_report_downstream::orderBy('fatality', 'desc')->take(5)->get();	}
 	function up_incidences() {	 return $up_incidences = \App\she_accident_report_upstream::orderBy('fatality', 'desc')->take(5)->get();	}
 	function wide_incidences() {	 return $wide_incidences = \App\she_accident_report_industry_wide::orderBy('fatality', 'desc')->take(5)->get();	}

 	function ave_prices() {	 return $ave_prices = \App\up_ave_price_crude_stream::orderBy('value', 'desc')->take(5)->get();	}

 	function opls() {	 return $opls = \App\Bala_opl::orderBy('area', 'desc')->take(5)->get();	}
 	function omls() {	 return $omls = \App\Bala_oml::orderBy('area', 'desc')->take(5)->get();	}



 	function tot_projects() {	 return $tot_projects = \App\dwp::count();	}
 	function dwp_notstarted() {	return $dwp_notstarted = \App\dwp::where('status', '1')->orWhere('status', '1')->count();	}
 	function dwp_inprogress() {	return $dwp_inprogress = \App\dwp::where('status', '2')->count();	}
 	function dwp_completed() {	return $dwp_completed = \App\dwp::where('status', '3')->count();	}
 	function dwp_pending() {	return $dwp_pending = \App\dwp::where('status', '4')->count();	}


 	function tot_war() {	 return $tot_war = \App\war::count();	}


 	function tot_mpm() {	 return $tot_mpm = \App\mpm::count();	}


 	function dwp_projects() {	 return $dwp_projects = \App\dwp::get();	}

 	function mpms() {	   return $mpms = \App\mpm::orderBy('id', 'desc')->take(5)->get();	}

 	function wars() {	   return $wars = \App\war::orderBy('id', 'desc')->take(5)->get();	}