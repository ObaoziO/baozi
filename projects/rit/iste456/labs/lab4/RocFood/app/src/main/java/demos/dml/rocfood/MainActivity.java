package demos.dml.rocfood;

import android.content.Intent;
import android.content.res.Resources;
import android.net.Uri;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.Spinner;
import android.widget.Toast;

import com.google.android.gms.appindexing.Action;
import com.google.android.gms.appindexing.AppIndex;
import com.google.android.gms.common.api.GoogleApiClient;

public class MainActivity extends AppCompatActivity {

    /**
     * ATTENTION: This was auto-generated to implement the App Indexing API.
     * See https://g.co/AppIndexing/AndroidStudio for more information.
     */
    private GoogleApiClient client;
    private int findItAt = 19382;
    private String myAddr;

    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


        // Get a reference to the Spinner
        Spinner fastfood = (Spinner) findViewById(R.id.fastfood);
        Spinner casualfood = (Spinner) findViewById(R.id.casualfood);
        Spinner formalfood = (Spinner) findViewById(R.id.formalfood);

        // Get a reference to the Go Button
        final Button fastGoBtn = (Button) findViewById(R.id.fastGoBtn);
        final Button casualGoBtn = (Button) findViewById(R.id.casualGoBtn);
        final Button formalGoBtn = (Button) findViewById(R.id.formalGoBtn);

        // Create an Adapter that holds a list of fast food locations
        // An ArrayAdapter is an adapter backed by an array of objects.
        // It links the array to the Adapter View.
        ArrayAdapter<CharSequence> fastAdapter = ArrayAdapter.createFromResource(
                this, R.array.fastfood_array, R.layout.dropdown);
        ArrayAdapter<CharSequence> casualAdapter = ArrayAdapter.createFromResource(
                this, R.array.casualfood_array, R.layout.dropdown);
        ArrayAdapter<CharSequence> formalAdapter = ArrayAdapter.createFromResource(
                this, R.array.formalfood_array, R.layout.dropdown);
        // Set the Adapter for the spinner
        fastfood.setAdapter(fastAdapter);
        casualfood.setAdapter(casualAdapter);
        formalfood.setAdapter(formalAdapter);

        // Set an setOnItemSelectedListener on the spinner
        fastfood.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            public void onItemSelected(AdapterView<?> parent, View view,
                                       int pos, long id) {

                // Display the fast food restaurant on the button

                        fastGoBtn.setText("Let's go to " + parent.getItemAtPosition(pos).toString());
                        findItAt = pos;
            }

            public void onNothingSelected(AdapterView<?> parent) {
            }
        });

        fastGoBtn.setOnClickListener(new View.OnClickListener() {

            // Called when user clicks the Show Map button
            public void onClick(View v) {
                try {

                    // Process text for network transmission

                    Resources res = getResources();
                    String[] addr = res.getStringArray(R.array.fastfood_addr);
                    myAddr = addr[findItAt];

                    // Create Intent object for starting Google Maps application
                    Intent geoIntent = new Intent(
                            android.content.Intent.ACTION_VIEW, Uri
                            .parse("geo:0,0?q=" + myAddr));

                    // Use the Intent to start Google Maps application using Activity.startActivity()
                    startActivity(geoIntent);

                } catch (Exception e) {
                    // Log any error messages to LogCat using Log.e()
                    // Log.e(TAG, e.toString());
                }
            }
        });

        // Set an setOnItemSelectedListener on the spinner
        casualfood.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            public void onItemSelected(AdapterView<?> parent, View view,
                                       int pos, long id) {

                // Display the casual food restaurant on the button
                casualGoBtn.setText("Let's go to " + parent.getItemAtPosition(pos).toString());
                findItAt = pos;
            }

            public void onNothingSelected(AdapterView<?> parent) {
            }
        });

        casualGoBtn.setOnClickListener(new View.OnClickListener() {

            // Called when user clicks the Show Map button
            public void onClick(View v) {
                try {

                    // Process text for network transmission

                    Resources res = getResources();
                    String[] addr = res.getStringArray(R.array.casualfood_addr);
                    myAddr = addr[findItAt];

                    // Create Intent object for starting Google Maps application
                    Intent geoIntent = new Intent(
                            android.content.Intent.ACTION_VIEW, Uri
                            .parse("geo:0,0?q=" + myAddr));

                    // Use the Intent to start Google Maps application using Activity.startActivity()
                    startActivity(geoIntent);

                } catch (Exception e) {
                    // Log any error messages to LogCat using Log.e()
                    // Log.e(TAG, e.toString());
                }
            }
        });

        // Set an setOnItemSelectedListener on the spinner
        formalfood.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            public void onItemSelected(AdapterView<?> parent, View view,
                                       int pos, long id) {

                // Display the formal food restaurant on the button
                formalGoBtn.setText("Let's go to " + parent.getItemAtPosition(pos).toString());
                findItAt = pos;
            }

            public void onNothingSelected(AdapterView<?> parent) {
            }
        });

        formalGoBtn.setOnClickListener(new View.OnClickListener() {

            // Called when user clicks the Show Map button
            public void onClick(View v) {
                try {

                    // Process text for network transmission

                    Resources res = getResources();
                    String[] addr = res.getStringArray(R.array.formalfood_addr);
                    myAddr = addr[findItAt];

                    // Create Intent object for starting Google Maps application
                    Intent geoIntent = new Intent(
                            android.content.Intent.ACTION_VIEW, Uri
                            .parse("geo:0,0?q=" + myAddr));

                    // Use the Intent to start Google Maps application using Activity.startActivity()
                    startActivity(geoIntent);

                } catch (Exception e) {
                    // Log any error messages to LogCat using Log.e()
                    // Log.e(TAG, e.toString());
                }
            }
        });
        // ATTENTION: This was auto-generated to implement the App Indexing API.
        // See https://g.co/AppIndexing/AndroidStudio for more information.
        client = new GoogleApiClient.Builder(this).addApi(AppIndex.API).build();
    }

    @Override
    public void onStart() {
        super.onStart();

        // ATTENTION: This was auto-generated to implement the App Indexing API.
        // See https://g.co/AppIndexing/AndroidStudio for more information.
        client.connect();
        Action viewAction = Action.newAction(
                Action.TYPE_VIEW, // choose an action type.
                "Main Page", // Define a title for the content shown.
                // If you have web page content that matches this app activity's content,
                // make sure this auto-generated web page URL is correct.
                // Otherwise, set the URL to null.
                Uri.parse("http://host/path"),
                // Make sure this auto-generated app deep link URI is correct.
                Uri.parse("android-app://demos.dml.rocfood/http/host/path")
        );
        AppIndex.AppIndexApi.start(client, viewAction);
    }

    @Override
    public void onStop() {
        super.onStop();

        // ATTENTION: This was auto-generated to implement the App Indexing API.
        // See https://g.co/AppIndexing/AndroidStudio for more information.
        Action viewAction = Action.newAction(
                Action.TYPE_VIEW, //  choose an action type.
                "Main Page", //  Define a title for the content shown.
                //  If you have web page content that matches this app activity's content,
                // make sure this auto-generated web page URL is correct.
                // Otherwise, set the URL to null.
                Uri.parse("http://host/path"),
                //  Make sure this auto-generated app deep link URI is correct.
                Uri.parse("android-app://demos.dml.rocfood/http/host/path")
        );
        AppIndex.AppIndexApi.end(client, viewAction);
        client.disconnect();
    }
}
