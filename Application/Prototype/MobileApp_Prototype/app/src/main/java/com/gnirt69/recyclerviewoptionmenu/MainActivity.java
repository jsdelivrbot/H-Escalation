package com.gnirt69.recyclerviewoptionmenu;

import android.annotation.TargetApi;
import android.content.Intent;
import android.os.Build;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.view.View;

import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity implements View.OnClickListener {

    private RecyclerView recyclerView;
    private MyAdapter adapter;
    private MyAdapter adapter2;
    private MyAdapter adapter3;
    private MyAdapter adapter4;
    private List<RecyclerItem> listItems;
    private List<RecyclerItem> listItems2;
    private RecyclerView recyclerView2;
    private List<RecyclerItem> listItems3;
    private RecyclerView recyclerView3;
    private RecyclerView recyclerView4;
    private List<RecyclerItem> listItems4;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        recyclerView4 = (RecyclerView) findViewById(R.id.recyclerView4);
        recyclerView4.setHasFixedSize(true);
        recyclerView4.setLayoutManager(new LinearLayoutManager(this));


        recyclerView3 = (RecyclerView) findViewById(R.id.recyclerView3);
        recyclerView3.setHasFixedSize(true);
        recyclerView3.setLayoutManager(new LinearLayoutManager(this));


        recyclerView2 = (RecyclerView) findViewById(R.id.recyclerView2);
        recyclerView2.setHasFixedSize(true);
        recyclerView2.setLayoutManager(new LinearLayoutManager(this));


        recyclerView = (RecyclerView) findViewById(R.id.recyclerView);
        recyclerView.setOnClickListener(this);
        recyclerView.setHasFixedSize(true);
        recyclerView.setLayoutManager(new LinearLayoutManager(this));

        listItems = new ArrayList<>();
        listItems2 = new ArrayList<>();
        listItems3 = new ArrayList<>();
        listItems4 = new ArrayList<>();

        //Generate sample data


        listItems.add(new RecyclerItem("Task", "Requesting Pillow:                                                                        Give Pillow                                                     Room 314                                           OPEN URGENT                                             DATE: 8/28/2017        TIME: 7:41PM"));
        listItems2.add(new RecyclerItem("Task ", "Dirty Bed Shit:                                                                        Change Bed Sheet                                                     Room 301                                           OPEN URGENT                                             DATE: 8/28/2017        TIME: 9:21PM"));
        listItems3.add(new RecyclerItem("Task", "Aircon Leak:                                                                        Check Pipes                                                     Room 303                                           OPEN URGENT                                             DATE: 8/28/2017        TIME: 8:21PM"));
        listItems4.add(new RecyclerItem("Task", "Clog Toilet:                                                                        Pump Toilet                                                     Room 306                                           OPEN URGENT                                             DATE: 8/28/2017        TIME: 9:45PM"));
        //Set adapter
        adapter = new MyAdapter(listItems, this);
        adapter2 = new MyAdapter(listItems2, this);
        adapter3 = new MyAdapter(listItems3, this);
        adapter4 = new MyAdapter(listItems4, this);
        recyclerView.setAdapter(adapter);
        recyclerView2.setAdapter(adapter2);
        recyclerView3.setAdapter(adapter3);
        recyclerView4.setAdapter(adapter4);


    }

    public void onClick(View view) {
        if (view == listItems) {
            finish();
            startActivity(new Intent(this, Task1.class));
        }


    }
}
