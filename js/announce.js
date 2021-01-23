function saveEdits() 
{
	var editElem = document.getElementById("edit");
	var userVersion = editElem.innerHTML;
	
	window.location.href = "AnnounceUpdate.php?text="+userVersion;
	alert("Announcement has been updated!");
}