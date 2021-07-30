<?php
	/************* Navigation Bar **************/
	const L_OJ		= "Online Judge";
	const L_HOME	= "主页";
	const L_PROB_SET= "题目列表";
	const L_CATEGORY= "分类";
	const L_MORE    = "更多";
	const L_RECENT_CONTEST= "近期比赛";
	const L_STATUS	= "状态";
	const L_RANKLIST= "排行榜";
	const L_CONTEST	= "竞赛/作业";
	const L_QQ_LOGIN	= "QQ 登录";
	const L_BIND_QQ	= "绑定 QQ";
	const L_NEWSLIST	= "新闻";
	const L_FORUM	= "论坛";
	const L_REGISTER= "注册";
	const L_LOGIN	= "登录";
	const L_INBOX	= "收件箱";
	const L_MOD_INFO= "修改信息";
	const L_USR_PAGE = "用户主页";
	const L_RECENTSUB= "最近提交";
	const L_CTRLPANEL= "控制面板";
	const L_PORB_STAT= "Problem Statistics";
	const L_LOGOUT	= "退出登录";
	const L_OVERVIEW= "详情";
	const L_PREV_PAGE= "上一页";
	const L_NEXT_PAGE= "下一页";
	const L_SRC_VIEW= "查看源码";
	const L_SRC_SIM_VIEW= "查看相似源码";
	const L_ERR_VIEW= "错误详情";
	const L_TAGLIST	= "标签列表";
	const L_DOCUMENT= "文件";
	/*********** Problem Description ***********/
	const L_TITLE 	= "题目";
	const L_DESC  	= "描述";
	const L_SUBMIT	= "提交";
	const L_TESTRUN	= "运行测试";
	const L_CLARIFICATION	= "咨询";
	const L_EDIT	= "编辑";
	const L_CODE_SUBMIT	= "代码提交";
	const L_TIME_LIMIT = "时间限制";
	const L_MEM_LIMIT = "内存限制";
	/************* Contest **************/
	const L_START_TIME	= "开始时间";
	const L_END_TIME	= "结束时间";
	const L_JOIN_CONTEST = "加入竞赛";
	const L_CONTEST_ID	= "竞赛ID";
	const L_CONTEST_DESC = "描述";
	const L_CONTEST_INFO = "竞赛信息";
	const L_CONTEST_PROB = "竞赛题目";
	const L_CONTEST_ISPUB = "竞赛权限";
	const L_CONTEST_STATUS = "竞赛状态";
	/************* News **************/
    const L_NEWSDETAIL	= "新闻详情";
    const L_RESET	= "重置密码";
	/************* Contest Status **************/
	const L_Creator  = "创建者";
	const L_Privilege = "权限";
	const L_LeftTime = "剩余时间";
	const L_Running  = "进行中";
	const L_Public   = "公开";
	const L_Private  = "私有";
	const L_Register  = "注册";
	const L_Ended	= "已结束";
	const L_Start	= "开始于:";
	const L_Not_Start	= "未开始";
	/************* Hint Statement **************/
	const L_CONTEST_NOT_AUTH	= "你没有权限参与此竞赛";
	const L_CONTEST_NOT_START	= "竞赛尚未开始，请等待。";
	const L_CONTEST_NEED_PSW	= "如果知道密码，您也可以使用密码访问此比赛。";
	const L_CONTEST_NEED_ACCOUNT= "参加任何比赛都需要登陆账号";
	const L_NO_SUBMIT_RECORD	= "无法显示数据，请尝试解决一个题目 :)";
	const L_WEEKY_SUBMIT_N_AC	= "近期提交量";
	const L_THREAD_HELP	= "回复时可使用BBCode码，具体请百度使用方法。";
	const L_RANKLIST_LOCKED = "已封榜, Good lock!";
	const L_CHANGE_AVATAR_HINT = "Wanna change your avatar? Read FAQ!";
	const L_NO_UNREAD_HINT = "尚未收到未读消息";
	/************* Judge Status *****************/
	const L_JUDGE_PD = "判题中..";
	const L_JUDGE_PR = "等待判题";
	const L_JUDGE_CI = "编译中..";
	const L_JUDGE_RG = "运行并测试";
	const L_JUDGE_AC = "正确";
	const L_JUDGE_PE = "格式错误";
	const L_JUDGE_WA = "答案错误";
	const L_JUDGE_TLE = "运行超时";
	const L_JUDGE_MLE = "超出内存限制";
	const L_JUDGE_OLE = "输出超限";
	const L_JUDGE_RE = "运行时错误";
	const L_JUDGE_CE = "编译错误";
	const L_JUDGE_CO = "编译OK"; // ?????
	const L_JUDGE_TR = "测试运行";
	/************* Program Page *****************/
	const L_PROB_ID = "题目 ID";
	const L_PROB_DESC = "题目描述";
	const L_INPUT	= "输入描述";
	const L_OUTPUT	= "输出描述";
	const L_SAMP_INPUT = "样例输入";
	const L_SAMP_OUTPUT = "样例输出";
	const L_TEST_DATA = "测试数据";
	const L_HINT	= "提示";
	const L_TAG		= "标签";
	const L_SOURCE	= "来源";
	const L_DIFFICUTY = "难度";
	/************* Status Page ****************/
	const L_RUN_ID	= "运行 ID";
	const L_MEMORY	= "内存";
	const L_COMPILER= "语言";
	const L_LENGHT	= "代码长度";
	const L_TIME_COST	= "运行时间";
	const L_SUBMIT_TIME	= "提交时间";
	const L_JUDGE_REASON = "判题原因";
	/************* Mail Page *****************/
	const L_VIEW	= "查看";
	const L_SEND	= "发送";
	const L_CLEAR	= "清空";
	const L_CONTENT	= "内容";
	const L_SEND_TO	= "发送给";
	const L_USER_NOT_EXIST	= "用户不存在!";
	const L_WRITE_NEW_MAIL	= "创建新邮件";
	/************* Register ****************/
	const L_PLZ			= "请";
	const L_UID_MSG	= "学号";
	const L_UID			= "用户";
	const L_NICK		= "昵称";
	const L_MOTTO		= "签名";
	const L_PSW		= "密码";
	const L_VERIFY		= "验证码";
	const L_PSW_AGAIN	= "再次输入密码";
	const L_PSW_FORGET	= "忘记密码";
	const L_SCHOOL		= "学校";
	const L_EMAIL		= "邮箱";
	const L_AGREE_EULA	= "接受最终用户许可协议";
	const L_PWD_HELP	= "输入你的邮件";
	const L_UID_DV_MSG	= "学号不低于3位数";
	const L_PSW_DV_MSG	= "密码需要大于6个字符.";
	const L_PSW2_DV_MSG	= "两次密码不匹配";
	/************* User Page ***************/
	const L_USER_PAGE	= "用户主页";
	const L_USER_INFO	= "用户信息";
	const L_USER_RNAME	= "姓名";
	const L_USER_MAJOR	= "专业";
	const L_ORI_PSW		= "密码";
	const L_NEW_PSW		= "新密码";
	const L_NEW_PSW_AGAIN= "再次输入新密码";
	const L_MODIFY_INFO	= "修改用户信息";
	const L_SOLVED		= "已解决";
	const L_CHALLENGED	= "已挑战";
	const L_NOT_EDITABLE= "不可编辑";
	const L_INCORRECT_PSW = "错误密码.";
	const L_USERINFO_UPDATED = "用户信息更新成功.";
	/************* Ranklist ***************/
	const L_RANK	= "排名";
	const L_PASSRATE= "通过率";
    const L_PENALTY = "罚时";
	/************* Forum ***************/
	const L_THREADLIST	= "主题列表";
	const L_THREAD		= "主题列表";
	const L_LASTREPLY	= "最近回复";
	const L_REFRESH	= "刷新 ";
	const L_AUTHOR	= "作者";
	const L_POST	= "Post";
	const L_REPLY	= "Reply";
	const L_PROBLEM	= "Problem";
	const L_LOCK	= "Lock Thread";
	const L_UNLOCK	= "Unlock Thread";
	const L_LOCKED	= "Locked";
	const L_STICKY	= "Sticky Thread";
	const L_TOP_0	= "Unsticky";
	const L_TOP_1	= "Sticky";
	const L_TOP_2	= "Topic Sticky";
	const L_TOP_3	= "Global Sticky";
	const L_UNREAD_REPLIES = "Unread replies";
	const L_DELETE_THREAD = "Delete Thread";
	const L_PROBLEM_DISCUSS	= "Problem Discussion";
	const L_GOTO_PROBLEM = "GO TO PROBLEM";
	const L_GOTO_CONTEST = "GO BACK TO CONTEST";
	const L_THREADLIST_EMPTY = "主题列表为空";
	const L_LOGIN_TO_CONTINUE = "You must login to continue";
	const L_MUST_LOGIN_TO_POST = "You must login to post new thread.";
	const L_MUST_LOGIN_TO_REPLY = "You must login to reply this thread.";
	const L_LOCKED_FOR_EDIT = "This reply is locked for edit.";
	const L_ASK_FOR_RELOAD_PAGE = "Would you like reload this page now?";
	/************* Misc *****************/
	const L_OR		= "or";
	const L_OK		= "Okay";
	const L_GO		= "Go";
	const L_ALL		= "全部";
	const L_ABOUT	= "About";
	const L_HERE	= "HERE";
	const L_FIND	= "Find";
	const L_HELP	= "Help";
	const L_LANG	= "Language";
	const L_NEWS	= "News";
	const L_CLOSE	= "Close";
	const L_TOTAL 	= "Total";
	const L_RESULT	= "Result";
	const L_SIM	    = "Sim";
	const L_DELETE	= "Delete";
	const L_SUCCESS = "Success";
	const L_WARNING = "Warning";
	const L_DOWNLOAD= "Download";
	const L_UPLOAD	= "Upload";
	const L_CHANGE	= "Change";
	const L_REMOVE	= "Remove";
	const L_OTHER	= "其他";
	const L_SEARCH	= "搜索";
	const L_HIDDEN	= "Hidden";
	const L_NORMAL	= "Normal";
	const L_IMPORTANT = "Important";
	const L_AVALIABLE = "Avaliable";
	const L_MANAGEMENT = "Management";
	const L_SELECT_FILE = "Select file";
	const L_FILEMANGER = "Files Manger";
	const L_MORE_OPTIONS = "More Options";
	const L_INFOLABEL = "[INFO]";
	/************* Date *****************/
	const L_DAY		= "Day";
	const L_WEEK	= "Week";
	const L_MONTH	= "Month";
	const L_YEAR	= "Year";
	const L_DATE	= "Date";

	const L_HOUR	= "Hour";
	const L_MINUTE	= "Minute";
	const L_SRV_TIME= "Server Time(GMT+0800)";
	const L_DATE_SCALE= "Date Scale";
	/************* Utils Url *************/
	const L_GRAVATAR_GEN_URL = "https://www.gravatar.com/avatar/";
?>
