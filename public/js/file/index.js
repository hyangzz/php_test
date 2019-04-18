$(document).ready(function() {

    $(".file").contextMenu({
        width: 110, // width
		itemHeight: 30, // 菜单项height
		bgColor: "#333", // 背景颜色
		color: "#fff", // 字体颜色
		fontSize: 12, // 字体大小
		hoverColor: "#fff", // hover字体颜色
		hoverBgColor: "#99CC66", // hover背景颜色
		target: function(ele) { // 当前元素--jq对象
			console.log(ele);
		},
		menu: [
            { // 菜单项
				text: "信息",
				icon: "fa fa-info-circle",
				callback: function() {
					alert("信息");
				}
			},
			{
				text: "重命名",
				icon: "fa fa-pencil-square",
				callback: function() {
					alert("重命名");
				}
			},
			{
				text: "下载",
				icon: "fa fa-download",
				callback: function() {
					alert("下载");
				}
            },
            {
				text: "移动到",
				icon: "fa fa-clipboard",
				callback: function() {
					alert("移动到");
				}
			},
			{
				text: "删除",
				icon: "fa fa-trash-o",
				callback: function() {
					alert("删除");
				}
			}
		]
    });




    $(".folder_item").contextMenu({
        width: 110, // width
		itemHeight: 30, // 菜单项height
		bgColor: "#333", // 背景颜色
		color: "#fff", // 字体颜色
		fontSize: 12, // 字体大小
		hoverColor: "#fff", // hover字体颜色
		hoverBgColor: "#99CC66", // hover背景颜色
		target: function(ele) { // 当前元素--jq对象
			console.log(ele);
		},
		menu: [
            { // 菜单项
				text: "信息",
				icon: "fa fa-info-circle",
				callback: function() {
					alert("信息");
				}
			},
			{
				text: "重命名",
				icon: "fa fa-pencil-square",
				callback: function() {
					alert("重命名");
				}
			},
            {
				text: "下载RAR",
				icon: "fa fa-download",
				callback: function() {
					alert("下载");
				}
            },
            {
				text: "转移内部文件",
				icon: "fa fa-clipboard",
				callback: function() {
					alert("转移内部文件");
				}
			},
            
			{
				text: "删除",
				icon: "fa fa-trash-o",
				callback: function() {
					alert("删除");
				}
			}
		]
    });
    

    
})