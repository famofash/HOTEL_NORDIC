function form_action(frm, url)
{
    hideshow('load',1);
    	$.ajax({
	type: "POST",
	url: url,
	data: $('#'+ frm).serialize(),
        dataType: "json",
	success: function(msg){
                    if(parseInt(msg.status)==1)
			{
				window.location=msg.txt;
			}
			else if(parseInt(msg.status)==0)
			{
                            showalert(msg.txt);
                          
			}
			hideshow('load',0);
		},
            error: function(ts) { showalert(ts.responseText);}
	});
}

function create_booking(frm, url)
{
    
    hideshow('load',1);
    	$.ajax({
	type: "POST",
	url: url,
	data: $('#'+ frm).serialize(),
        dataType: "json",
	success: function(msg){
                    if(parseInt(msg.status)==1)
			{
				 showalert(msg.txt);
                                 location.reload();
			}
			else if(parseInt(msg.status)==0)
			{
                            showalert(msg.txt);
                          
			}
			hideshow('load',0);
		},
            error: function(ts) { showalert(ts.responseText);}
	});
}
function edit_user_action(frm, url)
{
    
    hideshow('load',1);
    	$.ajax({
	type: "POST",
	url: url,
	data: $('#'+ frm).serialize(),
        dataType: "json",
	success: function(msg){
                    if(parseInt(msg.status)==1)
			{
			showalert(msg.txt);
                        window.reload();
			}
			else if(parseInt(msg.status)==0)
			{
                            showalert(msg.txt);                          
			}
			hideshow('load',0);
		},
            error: function(ts) { showalert(ts.responseText);}
	});
}
function hideshow(el,act)
{
	if(act) $('.'+el).css('visibility','visible');
	else $('.'+el).css('visibility','hidden');
}

function error(act,txt)
{
	hideshow('error',act);
	if(txt) $('.error').html(txt);
}
function showalert(text)
{
    $.jAlert({
    'title': 'Nordic Hospitality Suites',
    'content': text,
    'theme': 'blue'
  });
}