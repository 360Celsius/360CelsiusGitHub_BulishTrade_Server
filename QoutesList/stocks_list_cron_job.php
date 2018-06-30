<?php

//   $quotes=array("AAPL","ACHN","AETI");
    
     $arrayFiltered = array();
     $arrayFiltered_2 = array();
     $arrayFiltered_3 = array();
     $arrayFiltered_4 = array();
     $arrayFiltered_5 = array();
     $arrayFiltered_6 = array();
	 $arrayFiltered_7 = array();
     $arrayFiltered_8 = array();
	 $arrayFiltered_9 = array();
     $arrayFiltered_10 = array();
	 
	 $arrayFiltered_11 = array();
     $arrayFiltered_12 = array();
     $arrayFiltered_13 = array();
     $arrayFiltered_14 = array();
     $arrayFiltered_15 = array();
     $arrayFiltered_16 = array();
	 $arrayFiltered_17 = array();
     $arrayFiltered_18 = array();
	 $arrayFiltered_19 = array();
	 $arrayFiltered_20 = array();
	 
	 $arrayFiltered_21 = array();
     $arrayFiltered_22 = array();
     $arrayFiltered_23 = array();
     $arrayFiltered_24 = array();
     $arrayFiltered_25 = array();
     $arrayFiltered_26 = array();
	 $arrayFiltered_27 = array();
     $arrayFiltered_28 = array();
	 $arrayFiltered_29 = array();
	 $arrayFiltered_30 = array();
	 
	 $arrayFiltered_31 = array();
     $arrayFiltered_32 = array();
     $arrayFiltered_33 = array();
     $arrayFiltered_34 = array();
     $arrayFiltered_35 = array();
     $arrayFiltered_36 = array();
	 $arrayFiltered_37 = array();
     $arrayFiltered_38 = array();
	 $arrayFiltered_39 = array();
	 $arrayFiltered_40 = array();
	 
	 $arrayFiltered_41 = array();
     $arrayFiltered_42 = array();
     $arrayFiltered_43 = array();
     $arrayFiltered_44 = array();
     $arrayFiltered_45 = array();
     $arrayFiltered_46 = array();
	 $arrayFiltered_47 = array();
     $arrayFiltered_48 = array();
	 $arrayFiltered_49 = array();
	 $arrayFiltered_50 = array();

	
     $quotes=array( "A",
                    "AA",
                    "AAL",
                    "AAP",
                    "AAPL",
                    "ABBV",
                    "ABC",
                    "ABMD",
                    "ABT",
                    "ACAD",
                    "ACC",
                    "ACGL",
                    "ACHC",
                    "ACM",
                    "ACN",
                    "ADBE",
                    "ADI",
                    "ADM",
                    "ADNT",
                    "ADP",
                    "ADS",
                    "ADSK",
                    "AEE",
                    "AEP",
                    "AES",
                    "AET",
                    "AFG",
                    "AFL",
                    "AGCO",
                    "AGIO",
                    "AGN",
                    "AGNC",
                    "AGO",
                    "AGR",
                    "AHL",
                    "AIG",
                    "AIV",
                    "AIZ",
                    "AJG",
                    "AKAM",
                    "AKRX",
                    "AL",
                    "ALB",
                    "ALGN",
                    "ALK",
                    "ALKS",
                    "ALL",
                    "ALLE",
                    "ALLY",
                    "ALNY",
                    "ALR",
                    "ALSN",
                    "ALXN",
                    "AMAT",
                    "AMCX",
                    "AMD",
                    "AME",
                    "AMG",
                    "AMGN",
                    "AMH",
                    "AMP",
                    "AMT",
                    "AMTD",
                    "AMZN",
                    "AN",
                    "ANAT",
                    "ANET",
                    "ANSS",
                    "ANTM",
                    "AON",
                    "AOS",
                    "APA",
                    "APC",
                    "APD",
                    "APH",
                    "APLE",
                    "AR",
                    "ARD",
                    "ARE",
                    "ARMK",
                    "ARNC",
                    "ARRS",
                    "ARW",
                    "ASB",
                    "ASH",
                    "ATH",
                    "ATHN",
                    "ATO",
                    "ATR",
                    "ATVI",
                    "AVB",
                    "AVGO",
                    "AVT",
                    "AVY",
                    "AWH",
                    "AWI",
                    "AWK",
                    "AXP",
                    "AXS",
                    "AXTA",
                    "AYI",
                    "AZO",
                    "BA",
                    "BAC",
                    "BAH",
                    "BAX",
                    "BBBY",
                    "BBT",
                    "BBY",
                    "BC",
                    "BCR",
                    "BDN",
                    "BDX",
                    "BEN",
                    "BERY",
                    "BF.A",
                    "BF.B",
                    "BFAM",
                    "BG",
                    "BGCP",
                    "BHI",
                    "BIIB",
                    "BIO",
                    "BIVV",
                    "BK",
                    "BKD",
                    "BKFS",
                    "BKU",
                    "BLK",
                    "BLL",
                    "BMRN",
                    "BMS",
                    "BMY",
                    "BOH",
                    "BOKF",
                    "BPOP",
                    "BR",
                    "BRCD",
                    "BRK.B",
                    "BRKR",
                    "BRO",
                    "BRX",
                    "BSX",
                    "BUFF",
                    "BURL",
                    "BWA",
                    "BWXT",
                    "BXP",
                    "C",
                    "CA",
                    "CAA",
                    "CAB",
                    "CABO",
                    "CACC",
                    "CAG",
                    "CAH",
                    "CASY",
                    "CAT",
                    "CAVM",
                    "CB",
                    "CBG",
                    "CBOE",
                    "CBS",
                    "CBSH",
                    "CBT",
                    "CC",
                    "CCI",
                    "CCK",
                    "CCL",
                    "CDEV",
                    "CDK",
                    "CDNS",
                    "CDW",
                    "CE",
                    "CELG",
                    "CERN",
                    "CF",
                    "CFG",
                    "CFR",
                    "CFX",
                    "CGNX",
                    "CHD",
                    "CHH",
                    "CHK",
                    "CHRW",
                    "CHTR",
                    "CI",
                    "CIM",
                    "CINF",
                    "CIT",
                    "CL",
                    "CLGX",
                    "CLH",
                    "CLNS",
                    "CLR",
                    "CLX",
                    "CMA",
                    "CMCSA",
                    "CME",
                    "CMG",
                    "CMI",
                    "CMS",
                    "CNA",
                    "CNC",
                    "CNDT",
                    "CNK",
                    "CNP",
                    "CNX",
                    "COF",
                    "COG",
                    "COH",
                    "COHR",
                    "COL",
                    "COMM",
                    "CONE",
                    "COO",
                    "COP",
                    "COR",
                    "COST",
                    "COTY",
                    "CPA",
                    "CPB",
                    "CPN",
                    "CPRT",
                    "CPT",
                    "CR",
                    "CRI",
                    "CRL",
                    "CRM",
                    "CSCO",
                    "CSGP",
                    "CSL",
                    "CSRA",
                    "CST",
                    "CSX",
                    "CTAS",
                    "CTL",
                    "CTSH",
                    "CTXS",
                    "CUBE",
                    "CVS",
                    "CVX",
                    "CXO",
                    "CXP",
                    "CXW",
                    "CY",
                    "D",
                    "DAL",
                    "DATA",
                    "DCI",
                    "DCT",
                    "DD",
                    "DDR",
                    "DE",
                    "DEI",
                    "DFS",
                    "DFT",
                    "DG",
                    "DGX",
                    "DHI",
                    "DHR",
                    "DIS",
                    "DISCA",
                    "DISCK",
                    "DISH",
                    "DKS",
                    "DLB",
                    "DLPH",
                    "DLR",
                    "DLTR",
                    "DNB",
                    "DNKN",
                    "DOV",
                    "DOW",
                    "DOX",
                    "DPS",
                    "DPZ",
                    "DRE",
                    "DRI",
                    "DST",
                    "DTE",
                    "DUK",
                    "DVA",
                    "DVMT",
                    "DVN",
                    "DXC",
                    "DXCM",
                    "EA",
                    "EBAY",
                    "ECL",
                    "ED",
                    "EEFT",
                    "EFX",
                    "EGN",
                    "EIX",
                    "EL",
                    "ELS",
                    "EMN",
                    "EMR",
                    "ENDP",
                    "ENR",
                    "EOG",
                    "EPC",
                    "EPR",
                    "EQC",
                    "EQIX",
                    "EQR",
                    "EQT",
                    "ERIE",
                    "ES",
                    "ESRT",
                    "ESRX",
                    "ESS",
                    "ETFC",
                    "ETN",
                    "ETR",
                    "EV",
                    "EVHC",
                    "EW",
                    "EWBC",
                    "EXC",
                    "EXEL",
                    "EXP",
                    "EXPD",
                    "EXPE",
                    "EXR",
                    "F",
                    "FAF",
                    "FANG",
                    "FAST",
                    "FB",
                    "FBHS",
                    "FCE.A",
                    "FCX",
                    "FDC",
                    "FDS",
                    "FDX",
                    "FE",
                    "FEYE",
                    "FFIV",
                    "FHB",
                    "FHN",
                    "FII",
                    "FIS",
                    "FISV",
                    "FITB",
                    "FL",
                    "FLIR",
                    "FLO",
                    "FLR",
                    "FLS",
                    "FLT",
                    "FMC",
                    "FNB",
                    "FND",
                    "FNF",
                    "FOX",
                    "FOXA",
                    "FRC",
                    "FRT",
                    "FSLR",
                    "FTNT",
                    "FTV",
                    "FWONA",
                    "FWONK",
                    "G",
                    "GD",
                    "GDDY",
                    "GDI",
                    "GE",
                    "GGG",
                    "GGP",
                    "GHC",
                    "GILD",
                    "GIS",
                    "GLPI",
                    "GLW",
                    "GM",
                    "GME",
                    "GNTX",
                    "GOOG",
                    "GOOGL",
                    "GPC",
                    "GPK",
                    "GPN",
                    "GPOR",
                    "GPS",
                    "GRA",
                    "GRMN",
                    "GS",
                    "GT",
                    "GWR",
                    "GWRE",
                    "GWW",
                    "GXP",
                    "H",
                    "HAIN",
                    "HAL",
                    "HAS",
                    "HBAN",
                    "HBI",
                    "HCA",
                    "HCN",
                    "HCP",
                    "HD",
                    "HDS",
                    "HE",
                    "HEI",
                    "HEI.A",
                    "HES",
                    "HFC",
                    "HGV",
                    "HHC",
                    "HIG",
                    "HII",
                    "HIW",
                    "HLF",
                    "HLT",
                    "HOG",
                    "HOLX",
                    "HON",
                    "HP",
                    "HPE",
                    "HPP",
                    "HPQ",
                    "HPT",
                    "HRB",
                    "HRC",
                    "HRL",
                    "HRS",
                    "HSIC",
                    "HST",
                    "HSY",
                    "HTA",
                    "HUBB",
                    "HUM",
                    "HUN",
                    "HXL",
                    "IAC",
                    "IBKR",
                    "IBM",
                    "ICE",
                    "ICPT",
                    "IDXX",
                    "IEX",
                    "IFF",
                    "IGT",
                    "ILMN",
                    "INCY",
                    "INFO",
                    "INGR",
                    "INT",
                    "INTC",
                    "INTU",
                    "INVH",
                    "IONS",
                    "IP",
                    "IPG",
                    "IPGP",
                    "IR",
                    "IRM",
                    "ISRG",
                    "IT",
                    "ITT",
                    "ITW",
                    "IVZ",
                    "JBHT",
                    "JBL",
                    "JBLU",
                    "JCI",
                    "JEC",
                    "JKHY",
                    "JLL",
                    "JNJ",
                    "JNPR",
                    "JPM",
                    "JUNO",
                    "JW.A",
                    "JWN",
                    "K",
                    "KAR",
                    "KATE",
                    "KEX",
                    "KEY",
                    "KEYS",
                    "KHC",
                    "KIM",
                    "KLAC",
                    "KMB",
                    "KMI",
                    "KMX",
                    "KO",
                    "KORS",
                    "KOS",
                    "KR",
                    "KRC",
                    "KSS",
                    "KSU",
                    "L",
                    "LAMR",
                    "LAZ",
                    "LB",
                    "LBRDA",
                    "LBRDK",
                    "LDOS",
                    "LEA",
                    "LECO",
                    "LEG",
                    "LEN",
                    "LEN.B",
                    "LEXEA",
                    "LGF.A",
                    "LGF.B",
                    "LH",
                    "LII",
                    "LKQ",
                    "LLL",
                    "LLY",
                    "LM",
                    "LMT",
                    "LNC",
                    "LNG",
                    "LNT",
                    "LOGM",
                    "LOW",
                    "LPI",
                    "LPLA",
                    "LPNT",
                    "LPT",
                    "LRCX",
                    "LSI",
                    "LSTR",
                    "LSXMA",
                    "LSXMK",
                    "LUK",
                    "LULU",
                    "LUV",
                    "LVLT",
                    "LVNTA",
                    "LVS",
                    "LW",
                    "LYB",
                    "LYV",
                    "M",
                    "MA",
                    "MAA",
                    "MAC",
                    "MAN",
                    "MANH",
                    "MAR",
                    "MAS",
                    "MAT",
                    "MCD",
                    "MCHP",
                    "MCK",
                    "MCO",
                    "MCY",
                    "MD",
                    "MDLZ",
                    "MDT",
                    "MDU",
                    "MET",
                    "MFA",
                    "MGM",
                    "MHK",
                    "MIC",
                    "MIDD",
                    "MIK",
                    "MKC",
                    "MKL",
                    "MKTX",
                    "MLM",
                    "MMC",
                    "MMM",
                    "MNK",
                    "MNST",
                    "MO",
                    "MON",
                    "MORN",
                    "MOS",
                    "MPC",
                    "MPW",
                    "MRK",
                    "MRO",
                    "MRVL",
                    "MS",
                    "MSCC",
                    "MSCI",
                    "MSFT",
                    "MSG",
                    "MSI",
                    "MSM",
                    "MTB",
                    "MTCH",
                    "MTD",
                    "MTN",
                    "MU",
                    "MUR",
                    "MUSA",
                    "MXIM",
                    "MYL",
                    "NATI",
                    "NAVI",
                    "NBIX",
                    "NBL",
                    "NBR",
                    "NCLH",
                    "NCR",
                    "NDAQ",
                    "NDSN",
                    "NEE",
                    "NEM",
                    "NEU",
                    "NFG",
                    "NFLX",
                    "NFX",
                    "NI",
                    "NKE",
                    "NLSN",
                    "NLY",
                    "NNN",
                    "NOC",
                    "NOV",
                    "NOW",
                    "NRG",
                    "NRZ",
                    "NSC",
                    "NTAP",
                    "NTRS",
                    "NUAN",
                    "NUE",
                    "NUS",
                    "NVDA",
                    "NVR",
                    "NWL",
                    "NWS",
                    "NWSA",
                    "NXPI",
                    "NYCB",
                    "O",
                    "OA",
                    "OC",
                    "ODFL",
                    "OFC",
                    "OGE",
                    "OHI",
                    "OI",
                    "OII",
                    "OKE",
                    "OLED",
                    "OLN",
                    "OMC",
                    "OMF",
                    "ON",
                    "OPK",
                    "ORCL",
                    "ORI",
                    "ORLY",
                    "OSK",
                    "OUT",
                    "OXY",
                    "OZRK",
                    "P",
                    "PACW",
                    "PAG",
                    "PAH",
                    "PANW",
                    "PAYX",
                    "PB",
                    "PBCT",
                    "PBF",
                    "PBI",
                    "PCAR",
                    "PCG",
                    "PCLN",
                    "PDCO",
                    "PDM",
                    "PE",
                    "PEG",
                    "PEP",
                    "PF",
                    "PFE",
                    "PFG",
                    "PG",
                    "PGR",
                    "PGRE",
                    "PH",
                    "PHM",
                    "PII",
                    "PINC",
                    "PK",
                    "PKG",
                    "PKI",
                    "PLD",
                    "PM",
                    "PNC",
                    "PNFP",
                    "PNR",
                    "PNRA",
                    "PNW",
                    "POOL",
                    "POST",
                    "PPC",
                    "PPG",
                    "PPL",
                    "PRA",
                    "PRGO",
                    "PRU",
                    "PSA",
                    "PSX",
                    "PTC",
                    "PTEN",
                    "PTHN",
                    "PVH",
                    "PWR",
                    "PX",
                    "PXD",
                    "PYPL",
                    "Q",
                    "QCOM",
                    "QEP",
                    "QGEN",
                    "QRVO",
                    "QVCA",
                    "R",
                    "RAD",
                    "RAI",
                    "RBC",
                    "RCL",
                    "RE",
                    "REG",
                    "REGN",
                    "RES",
                    "RF",
                    "RGA",
                    "RGC",
                    "RGLD",
                    "RHI",
                    "RHT",
                    "RICE",
                    "RIG",
                    "RJF",
                    "RL",
                    "RLGY",
                    "RMD",
                    "RNR",
                    "ROK",
                    "ROL",
                    "ROP",
                    "ROST",
                    "RPAI",
                    "RPM",
                    "RRC",
                    "RS",
                    "RSG",
                    "RSPP",
                    "RTN",
                    "RYN",
                    "S",
                    "SABR",
                    "SATS",
                    "SAVE",
                    "SBAC",
                    "SBH",
                    "SBNY",
                    "SBUX",
                    "SC",
                    "SCCO",
                    "SCG",
                    "SCHW",
                    "SCI",
                    "SEB",
                    "SEE",
                    "SEIC",
                    "SERV",
                    "SFM",
                    "SGEN",
                    "SHW",
                    "SIG",
                    "SIRI",
                    "SIVB",
                    "SIX",
                    "SJM",
                    "SKT",
                    "SKX",
                    "SLB",
                    "SLG",
                    "SLGN",
                    "SLM",
                    "SM",
                    "SMG",
                    "SNA",
                    "SNH",
                    "SNI",
                    "SNPS",
                    "SNV",
                    "SO",
                    "SON",
                    "SPB",
                    "SPG",
                    "SPGI",
                    "SPLK",
                    "SPLS",
                    "SPR",
                    "SQ",
                    "SRC",
                    "SRCL",
                    "SRE",
                    "SSNC",
                    "ST",
                    "STAY",
                    "STE",
                    "STI",
                    "STLD",
                    "STOR",
                    "STT",
                    "STWD",
                    "STZ",
                    "SUI",
                    "SWK",
                    "SWKS",
                    "SWN",
                    "SYF",
                    "SYK",
                    "SYMC",
                    "SYY",
                    "T",
                    "TAHO",
                    "TAP",
                    "TCF",
                    "TCO",
                    "TDC",
                    "TDG",
                    "TDS",
                    "TDY",
                    "TEAM",
                    "TECH",
                    "TER",
                    "TEX",
                    "TFSL",
                    "TFX",
                    "TGNA",
                    "TGT",
                    "THG",
                    "THO",
                    "THS",
                    "TIF",
                    "TJX",
                    "TKR",
                    "TMK",
                    "TMO",
                    "TMUS",
                    "TOL",
                    "TPX",
                    "TRCO",
                    "TRGP",
                    "TRIP",
                    "TRMB",
                    "TRN",
                    "TROW",
                    "TRU",
                    "TRV",
                    "TSCO",
                    "TSLA",
                    "TSN",
                    "TSO",
                    "TSRO",
                    "TSS",
                    "TTC",
                    "TTWO",
                    "TUP",
                    "TWO",
                    "TWTR",
                    "TWX",
                    "TXN",
                    "TXT",
                    "TYL",
                    "UA",
                    "UAA",
                    "UAL",
                    "UDR",
                    "UFS",
                    "UGI",
                    "UHAL",
                    "UHS",
                    "ULTA",
                    "ULTI",
                    "UNH",
                    "UNIT",
                    "UNM",
                    "UNP",
                    "UNVR",
                    "UPS",
                    "URBN",
                    "URI",
                    "USB",
                    "USFD",
                    "USG",
                    "USM",
                    "UTHR",
                    "UTX",
                    "V",
                    "VAR",
                    "VC",
                    "VEEV",
                    "VER",
                    "VFC",
                    "VIA",
                    "VIAB",
                    "VLO",
                    "VMC",
                    "VMI",
                    "VMW",
                    "VNO",
                    "VNTV",
                    "VOYA",
                    "VR",
                    "VRSK",
                    "VRSN",
                    "VRTX",
                    "VSM",
                    "VST",
                    "VTR",
                    "VVC",
                    "VVV",
                    "VWR",
                    "VZ",
                    "W",
                    "WAB",
                    "WAL",
                    "WAT",
                    "WBA",
                    "WBC",
                    "WBS",
                    "WBT",
                    "WCC",
                    "WCG",
                    "WDAY",
                    "WDC",
                    "WEC",
                    "WEN",
                    "WEX",
                    "WFC",
                    "WFM",
                    "WFT",
                    "WHR",
                    "WLK",
                    "WLL",
                    "WLTW",
                    "WM",
                    "WMB",
                    "WMT",
                    "WOOF",
                    "WPC",
                    "WPX",
                    "WR",
                    "WRB",
                    "WRI",
                    "WRK",
                    "WSM",
                    "WSO",
                    "WST",
                    "WTM",
                    "WTR",
                    "WU",
                    "WY",
                    "WYN",
                    "WYNN",
                    "X",
                    "XEC",
                    "XEL",
                    "XL",
                    "XLNX",
                    "XOG",
                    "XOM",
                    "XON",
                    "XPO",
                    "XRAY",
                    "XRX",
                    "XYL",
                    "Y",
                    "YUM",
                    "YUMC",
                    "Z",
                    "ZAYO",
                    "ZBH",
                    "ZBRA",
                    "ZG",
                    "ZION",
                    "ZNGA",
                    "ZTS"
                    );




    for ($x = 0; $x <= 20 ; $x++){
        //if($x % 5 == 0)
        {
        	array_push($arrayFiltered, $quotes[$x]);
        }
    }
    
    for ($x = 21; $x <= 40 ; $x++){
        //if($x % 5 == 0)
        {
        	array_push($arrayFiltered_2, $quotes[$x]);
        }
    }
    
    for ($x = 41; $x <= 60 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_3, $quotes[$x]);
        }
    }
    
    for ($x = 61; $x <= 80 ; $x++){
        //if($x % 5 == 0)
        {
        	array_push($arrayFiltered_4, $quotes[$x]);
        }
    }
    
    for ($x = 81; $x <= 100 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_5, $quotes[$x]);
        }
    }
	
	
	for ($x = 101; $x <= 120 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_6, $quotes[$x]);
        }
    }
	
	for ($x = 121; $x <= 140 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_7, $quotes[$x]);
        }
    }
	
	for ($x = 141; $x <= 160 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_8, $quotes[$x]);
        }
    }
	
	for ($x = 161; $x <= 180 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_9, $quotes[$x]);
        }
    }
	
	for ($x = 181; $x <= 200 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_10, $quotes[$x]);
        }
    }
	
	
	for ($x = 201; $x <= 220 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_11, $quotes[$x]);
        }
    }
	
	for ($x = 221; $x <= 240 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_12, $quotes[$x]);
        }
    }
	
	for ($x = 241; $x <= 260 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_13, $quotes[$x]);
        }
    }
	
	for ($x = 261; $x <= 280 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_14, $quotes[$x]);
        }
    }
	
	for ($x = 281; $x <= 300 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_15, $quotes[$x]);
        }
    }
	
	for ($x = 301; $x <= 320 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_16, $quotes[$x]);
        }
    }
	
	for ($x = 321; $x <= 340 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_17, $quotes[$x]);
        }
    }
	
	for ($x = 341; $x <= 360 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_18, $quotes[$x]);
        }
    }
	
	for ($x = 361; $x <= 380 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_19, $quotes[$x]);
        }
    }
	
	for ($x = 381; $x <= 400 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_20, $quotes[$x]);
        }
    }
	
	for ($x = 401; $x <= 420 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_21, $quotes[$x]);
        }
    }
	
	for ($x = 421; $x <= 440 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_22, $quotes[$x]);
        }
    }
	
	for ($x = 441; $x <= 460 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_23, $quotes[$x]);
        }
    }
	
	for ($x = 461; $x <= 480 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_24, $quotes[$x]);
        }
    }
	
	for ($x = 481; $x <= 500 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_25, $quotes[$x]);
        }
    }
	
	for ($x = 501; $x <= 521 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_25, $quotes[$x]);
        }
    }
	
	for ($x = 541; $x <= 560 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_26, $quotes[$x]);
        }
    }
	
	for ($x = 561; $x <= 580 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_27, $quotes[$x]);
        }
    }
	
	for ($x = 581; $x <= 600 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_28, $quotes[$x]);
        }
    }
	
	for ($x = 601; $x <= 620 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_29, $quotes[$x]);
        }
    }
    
	for ($x = 621; $x <= 640 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_30, $quotes[$x]);
        }
    }
	
	for ($x = 641; $x <= 660 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_31, $quotes[$x]);
        }
    }
	
	for ($x = 661; $x <= 680 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_32, $quotes[$x]);
        }
    }
	
	for ($x = 681; $x <= 700 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_33, $quotes[$x]);
        }
    }
	
	for ($x = 701; $x <= 720 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_34, $quotes[$x]);
        }
    }
	
	for ($x = 721; $x <= 740 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_35, $quotes[$x]);
        }
    }
	
	for ($x = 741; $x <= 760 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_36, $quotes[$x]);
        }
    }
	
	for ($x = 761; $x <= 780 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_37, $quotes[$x]);
        }
    }
	
	for ($x = 781; $x <= 800 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_38, $quotes[$x]);
        }
    }
	
	for ($x = 801; $x <= 820 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_39, $quotes[$x]);
        }
    }
	
	for ($x = 821; $x <= 840 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_40, $quotes[$x]);
        }
    }
	
	for ($x = 841; $x <= 860 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_41, $quotes[$x]);
        }
    }
	
	for ($x = 861; $x <= 880 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_42, $quotes[$x]);
        }
    }
	
	for ($x = 881; $x <= 900 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_43, $quotes[$x]);
        }
    }
	
	for ($x = 901; $x <= 920 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_44, $quotes[$x]);
        }
    }
	
	for ($x = 921; $x <= 940 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_45, $quotes[$x]);
        }
    }
	
	for ($x = 941; $x <= 960 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_46, $quotes[$x]);
        }
    }
	
	for ($x = 961; $x <= 980 ; $x++){
       // if($x % 5 == 0)
        {
        	array_push($arrayFiltered_47, $quotes[$x]);
        }
    }

?>

