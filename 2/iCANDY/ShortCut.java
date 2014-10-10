// create shortcut
import java.util.List;

import android.app.Activity;
import android.content.Context;
import android.content.Intent;
import android.content.pm.ActivityInfo;
import android.content.pm.PackageManager;
import android.content.pm.ResolveInfo;
import android.os.Bundle;

public class shortcutapp extends Activity 

{

@Override
public void onCreate(Bundle savedInstanceState) 
{
super.onCreate(savedInstanceState);
//setContentView(R.layout.main);
String appName = "Dialer";
setShortCut(this,appName);
}



public boolean setShortCut(Context context, String appName)
{
System.out.println("in the shortcutapp on create method ");
boolean flag =false ;
int app_id=-1;
PackageManager p = context.getPackageManager();
Intent i = new Intent(Intent.ACTION_MAIN);
i.addCategory(Intent.CATEGORY_LAUNCHER); 
List<ResolveInfo> res =p.queryIntentActivities( i,0);
System.out.println("the res size is: "+res.size());

for(int k=0;k<res.size();k++)
{
System.out.println("the application name is: "+res.get(k).activityInfo.loadLabel(p));
if(res.get(k).activityInfo.loadLabel(p).toString().equals(appName)){
flag = true;
app_id = k;
break;
}
}

if(flag){
ActivityInfo ai = res.get(app_id).activityInfo;

Intent shortcutIntent = new Intent();
shortcutIntent.setClassName(ai.packageName, ai.name);
shortcutIntent.addFlags(Intent.FLAG_ACTIVITY_NEW_TASK);
shortcutIntent.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);
Intent intent = new Intent();
intent.putExtra(Intent.EXTRA_SHORTCUT_INTENT, shortcutIntent);

intent.putExtra(Intent.EXTRA_SHORTCUT_NAME, appName);

intent.putExtra(Intent.EXTRA_SHORTCUT_ICON_RESOURCE, Intent.ShortcutIconResource.fromContext(context, R.drawable.icon1));
//intent.addCategory(Intent.CATEGORY_DEFAULT);
intent.setAction("com.android.launcher.action.INSTALL_SHORTCUT");
context.sendBroadcast(intent);
System.out.println("in the shortcutapp on create method completed");
}
else
System.out.println("appllicaton not found");
return true;
}


}
// |-----------------|
// |ALTERNATIVE ROUTE|
// |-----------------|
//
// Call this method in your First screen's onCreate() method. Also ensure to check that app is running first time using SharedPreferences like I did :
//

 private void addShortcut() {
    //Adding shortcut for MainActivity on Home screen
    Intent shortcutIntent = new Intent(getApplicationContext(),MainActivity.class);

    shortcutIntent.setAction(Intent.ACTION_MAIN);

    Intent addIntent = new Intent();
    addIntent.putExtra(Intent.EXTRA_SHORTCUT_INTENT, shortcutIntent);
    addIntent.putExtra(Intent.EXTRA_SHORTCUT_NAME, this.getResources().getString(R.string.app_name));
    addIntent.putExtra(Intent.EXTRA_SHORTCUT_ICON_RESOURCE,Intent.ShortcutIconResource.fromContext(getApplicationContext(),
                        R.drawable.ic_launcher));

    addIntent.setAction("com.android.launcher.action.INSTALL_SHORTCUT");
    getApplicationContext().sendBroadcast(addIntent);
}

    // TO check app is installed first time.
    SharedPreferences prefs = getSharedPreferences("ShortCutPrefs", MODE_PRIVATE);
    if(!prefs.getBoolean("isFirstTime", false)){
        addShortcut();
        SharedPreferences.Editor editor = prefs.edit();
        editor.putBoolean("isFirstTime", true);
        editor.commit();
    } 
    
//
//
//
//

Intent shortcutIntent = new Intent();
shortcutIntent.setClassName(ai.packageName, ai.name);
shortcutIntent.addFlags(Intent.FLAG_ACTIVITY_NEW_TASK);
shortcutIntent.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);
shortcutIntent.addCategory(Intent.ACTION_PICK_ACTIVITY);
Intent intent = new Intent();
intent.putExtra(Intent.EXTRA_SHORTCUT_INTENT, shortcutIntent);
intent.putExtra(Intent.EXTRA_SHORTCUT_NAME, appName);

BitmapDrawable bd=(BitmapDrawable)(res.get(app_id).activityInfo.loadIcon(p).getCurrent());
Bitmap newbit;
newbit=bd.getBitmap();
intent.putExtra(Intent.EXTRA_SHORTCUT_ICON, newbit);

intent.setAction("com.android.launcher.action.INSTALL_SHORTCUT");
context.sendBroadcast(intent);
