//-- Copyright 2000, 2001, 2002, 2003 Macromedia, Inc. All rights reserved. --

    wrapFrame(curDOM, curNode, getFrameSpec());
	prefsAccessibilityOption = dw.getPreferenceString("Accessibility", "Accessibility Frame Options", "");
	if (prefsAccessibilityOption =='TRUE') {

	   var cmdFile = dreamweaver.getConfigurationPath() + "/Commands/FrameOptions.htm";
	   var cmdDOM = dreamweaver.getDocumentDOM(cmdFile);
   
       if (pDOM) {cmdDOM.parentWindow.setFormItem(pDOM);}
	   else {cmdDOM.parentWindow.setFormItem(curDOM);}
	   dreamweaver.popupCommand("FrameOptions.htm");
   }
}
	curDOM.body.outerHTML = newFSDOM.body.outerHTML;
        // Remove the invalid src attribute.