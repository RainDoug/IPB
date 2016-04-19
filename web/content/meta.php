<?php 

	/*Ideal layout*/
	if (stripos($_SERVER['REQUEST_URI'], 'about') !== false) {echo ' Independent Insurance Agency, Trusted Choice insurance agency, independent insurance agent, Insurance Agent in  ' . $area . ' ,  ' . $area . '  Financial Advisor,  ' . $area . '  Financial Planner, ' . $city . ' ' . $state . '  Insurance,  ' . $city . ' ' . $state . '  Insurance,  ' . $city . '  Insurance Agent,  ' . $city . '  Insurance,  ' . $city . '  Property Insurance,  ' . $city . '  Vacation Home insurance,  ' . $city . '  insurance,  ' . $city . '  Insurance Agency,  Insurance Agent,  Insurance Agency,  ' . $city . '  Insurance Agency';}
	if (stripos($_SERVER['REQUEST_URI'],'auto') || stripos($_SERVER['REQUEST_URI'],'vehicle') !== false) {echo 'Auto Insurance in  ' . $state . ' ,  ' . $state . '  liability insurance, auto insurance quote, free insurance quote, independent insurance agency, standard auto insurance, ' . $city . ' ' . $state . '  best auto insurance rate, classic car insurance, antique car insurance, RV insurance, travel trailer insurance, camper insurance, motorcycle insurance quote, watercraft insurance, boat insurance, vehicle insurance,  ' . $area . '  auto insurance policy, cheap auto insurance, best auto insurance, Trusted Choice Auto Insurance';}
	if (stripos($_SERVER['REQUEST_URI'],'business') !== false) {echo 'Small business insurance, home business insurance, free small business insurance quote, commercial property insurance, general liability insurance for businesses, general liability insurance, workers compensation insurance, workers compensation protection, farm and ranch insurance, farm equipment insurance in  ' . $area . ' ,  ' . $area . '  farm insurance, Bonds, Inland Marine insurance policy, commercial auto insurance, commercial auto quote, fleet auto insurance, commercial umbrella insurance, commercial property insurance, trusted choice, insurance for small businesses';}
	
	if (stripos($_SERVER['REQUEST_URI'],'calculators') !== false) {echo 'Auto loan calculator, auto lease calculator, lease vs buy calculator, home loan calculator, mortgage calculator, life insurance needs calculator, life insurance, insurance glossary of terms, insurance advise,  ' . $area . '  insurance agency, independent insurance agent, trusted choice insurance,  ' . $city . ' ' . $state . '  Insurance,  ' . $businessName . ' ,  ' . $area . '  financial planner';}
	if (stripos($_SERVER['REQUEST_URI'],'carriers') !== false) {echo 'Independent insurance agency,  ' . $businessName . ' , Trusted Choice,  ' . $area . '  Insurance Agency, ' . $city . ' ' . $state . '  Insurance,  ' . $city . ' ' . $state . '  Insurance ';}
	if (stripos($_SERVER['REQUEST_URI'],'claims') !== false) {echo ' ' . $area . '  Property Insurance, Property insurance claims, auto insurance claims, how to file an insurance claim, independent insurance agent claims instructions,  ' . $businessName . '  Claims Instructions, property damage coverage, fire damage claim, wind damage claim, vehicle damage claim ';}
	if (stripos($_SERVER['REQUEST_URI'],'contact') !== false) {echo 'Independent Insurance Agency, Trusted Choice insurance agency, independent insurance agent, Insurance Agent in  ' . $area . ' ,  ' . $area . '  Financial Advisor,  ' . $area . '  Financial Planner, ' . $city . ' ' . $state . '  Insurance,  ' . $city . ' ' . $state . '  Insurance,  ' . $city . '  Insurance Agent,  ' . $city . '  Insurance,  ' . $city . '  Property Insurance,  ' . $city . '  Vacation Home insurance,  ' . $city . '  insurance,  ' . $city . '  Insurance Agency,  Insurance Agent,  Insurance Agency,  ' . $city . '  Insurance Agency,  ' . $city . '  Insurance ';}
	if (stripos($_SERVER['REQUEST_URI'],'coverage') !== false) {echo 'Independent insurance agency,  ' . $area . '  insurance,  ' . $city . ' ' . $state . '  Insurance,  ' . $city . '  insurance,  insurance agency, ' . $city . ' ' . $state . '  insurance agency,  ' . $city . '   ' . $state . '  insurance agency,  ' . $city . '   ' . $state . '  insurance agency,  ' . $city . '   ' . $state . '  insurance agency,  ' . $city . '  insurance agency,  ' . $counties;}
	if (stripos($_SERVER['REQUEST_URI'],'glossary') !== false) {echo 'Insurance glossary of terms, insurance definitions, insurance resources, independent insurance agency, actual cash value, accidental death benefit coverage, insurance coverage limits, bodily injury coverage, insurance claims, comprehensive coverage, flood exclusion,  ' . $businessName . ' , financial definitions, financial planning,  ' . $state . '  liability auto insurance, vehicle insurance, small business insurance, commercial insurance in  ' . $state . ' , Life Insurance Coverage, Life Insurance quote, Health insurance quote, health insurance options in  ' . $state . ' , homeowners insurance, property insurance';}
	if (stripos($_SERVER['REQUEST_URI'],'health') !== false) {echo 'Life insurance, personal financial products,  ' . $area . '  financial advisor, universal life insurance, variable life insurance, term life insurance, long term care plan, long term care insurance, annuities, financial products, Life Insurance Coverage, Life Insurance quote, Health insurance quote, health insurance options in  ' . $state . ' , Risk management, financial planner in ' . $city . ' ' . $state . ' , tax management, retirement planner in ' . $city . ' ' . $state . ' ,  ' . $area . '  Financial Planner, Estate Planning in  ' . $area . ' , Education expense planning, risk management in  ' . $area . ' ,  ' . $area . '  Investment Planner, Life Insurance rate recommendations, life insurance calculator, trusted choice, independent insurance agent';}	
	if (stripos($_SERVER['REQUEST_URI'],'life') !== false) {echo 'Life insurance, personal financial products,  ' . $area . '  financial advisor, universal life insurance, variable life insurance, term life insurance, long term care plan, long term care insurance, annuities, financial products, Life Insurance Coverage, Life Insurance quote, Health insurance quote, health insurance options in  ' . $state . ' , Risk management, financial planner in ' . $city . ' ' . $state . ' , tax management, retirement planner in ' . $city . ' ' . $state . ' ,  ' . $area . '  Financial Planner, Estate Planning in  ' . $area . ' , Education expense planning, risk management in  ' . $area . ' ,  ' . $area . '  Investment Planner, Life Insurance rate recommendations, life insurance calculator, trusted choice, independent insurance agent';}
	if (stripos($_SERVER['REQUEST_URI'],'links') !== false) {echo 'Insurance industry links, helpful insurance information for  ' . $area . ' , insurance tips, insurance discounts, home inventory for insurance,  ' . $state . '  liability auto insurance, vehicle insurance, small business insurance, commercial insurance in  ' . $state . ' , Life Insurance Coverage, Life Insurance quote, Health insurance quote, health insurance options in  ' . $state . ' , homeowners insurance, property insurance';}
	if (stripos($_SERVER['REQUEST_URI'],'property') !== false) {echo 'trusted choice, independent insurance agency, property insurance,  ' . $area . '  property insurance,  ' . $area . '  Fire Insurance,  ' . $area . '  Homeowners Insurance, Condo insurance, beach house insurance, vacant dwelling insurance, tenant dwelling insurance, rental insurance, renters insurance quote, Flood insurance, personal umbrella insurance, flood from fire insurance, townhome insurance, rental insurance rate, free property insurance rate quote, free insurance rate quote, mobile home insurance';}
	if (stripos($_SERVER['REQUEST_URI'],'quote') !== false) {echo ' ' . $state . '  liability auto insurance, vehicle insurance, small business insurance, commercial insurance in  ' . $state . ' , Life Insurance Coverage, Life Insurance quote, Health insurance quote, health insurance options in  ' . $state . ' , homeowners insurance, property insurance, Risk management, financial planner in ' . $city . ' ' . $state . ' , tax management, retirement planner in ' . $city . ' ' . $state . ' ,  ' . $area . '  Financial Planner, Estate Planning in  ' . $area . ' , Education funding assistance, risk management in  ' . $area . ' ,  ' . $area . '  Investment Planner, Personal Financial Product, Employee and Executive Benefits, Trusted Choice, Independent Insurance Agency, Small Insurance Agency in  ' . $area . ' , Best Insurance Agency in  ' . $area . ' , online insurance quote form';}
	if (stripos($_SERVER['REQUEST_URI'],'resources') !== false) {echo ' ' . $businessName . ' , Insurance resources, insurance glossary of terms, insurance calculators, life insurance calculator, health insurance calculator, mortgage calculator, financial planning calculator, useful insurance links, insurance help,  ' . $area . '  Insurance,  ' . $area . '  Financial Planner';}
	if (stripos($_SERVER['REQUEST_URI'],'services') !== false) {echo ' ' . $state . '  liability auto insurance, vehicle insurance, small business insurance, commercial insurance in  ' . $state . ' , Life Insurance Coverage, Life Insurance quote, Health insurance quote, health insurance options in  ' . $state . ' , homeowners insurance, property insurance, Risk management, financial planner in ' . $city . ' ' . $state . ' , retirement planner in ' . $city . ' ' . $state . ' ,  ' . $area . '  Financial Planner, Estate Planning in  ' . $area . ' , Education funding assistance, risk management in  ' . $area . ' ,  ' . $area . '  Investment Planner, Personal Financial Product, Employee and Executive Benefits, Trusted Choice, Independent Insurance Agency, Small Insurance Agency in  ' . $area . ' , Best Insurance Agency in  ' . $area . ' ';}
	if (stripos($_SERVER['REQUEST_URI'],'staff') !== false) {echo 'Independent Insurance Agency, Trusted Choice insurance agency, independent insurance agent, Insurance Agent in  ' . $area . ' ,  ' . $area . '  Financial Advisor,  ' . $area . '  Financial Planner, ' . $city . ' ' . $state . '  Insurance,  ' . $city . ' ' . $state . '  Insurance,  ' . $city . '  Insurance Agent,  ' . $city . '  Insurance,  ' . $city . '  Property Insurance,  ' . $city . '  Vacation Home insurance,  ' . $city . '  insurance,  ' . $city . '  Insurance Agency,  Insurance Agent,  Insurance Agency,  ' . $city . '  Insurance Agency,  ' . $city . '  Insurance ';}
	
else { echo 'Insurance Agency in  ' . $city . ' ' . $state . ' ,  Auto Insurance, Independent Insurance Agent, Trusted Choice Agent, Financial planner ,  ' . $city . '  Insurance,   ' . $city . '  Insurance Agent, Free online insurance quote, vehicle insurance, small business insurance, commercial insurance in  ' . $state . ' , Life Insurance Coverage, Life Insurance quote, Health insurance quote, health insurance options in  ' . $state . ' , homeowners insurance, property insurance, Risk management, financial planner in ' . $city . ' ' . $state . ' , tax management, retirement planner in ' . $city . ' ' . $state . ' ,  ' . $area . '  Financial Planner, Estate Planning in  ' . $area . ' , Education funding assistance, risk management in  ' . $area . ' ,  ' . $area . '  Investment Planner, Employee and Executive Benefits, Trusted Choice, Independent Insurance Agency '; }	
	
	
	?>
