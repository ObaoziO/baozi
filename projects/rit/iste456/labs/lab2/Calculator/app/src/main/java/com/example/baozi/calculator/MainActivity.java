package com.example.baozi.calculator;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    private static final String TOTAL_KEY = "total";
    private int total = 0;
    TextView mTvCreate;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        mTvCreate = (TextView) 	findViewById(R.id.total);

        // Has previous state been saved?
        if (savedInstanceState != null) {
            // Restore value of total from saved state
            total = savedInstanceState.getInt(TOTAL_KEY);
            mTvCreate.setText(Integer.toString(total));
        }
    }
    public void onButtonClick(View v){
        Button button = (Button) v;
            String bText = button.getText().toString();
        int value = Integer.parseInt(bText);
        total += value;
        TextView myTextView = (TextView) findViewById(R.id.total);
        myTextView.setText(Integer.toString(total));
    }
    @Override
    public void onSaveInstanceState(Bundle savedInstanceState) {

        super.onSaveInstanceState(savedInstanceState);
        // TODO:
        // Save state information with a collection of key-value pairs
        // 4 lines of code, one for every count variable
        savedInstanceState.putInt(TOTAL_KEY, total);


    }
}
