package com.example.cleve.mutantesws;

import android.content.Context;

import com.android.volley.Cache;
import com.android.volley.Network;
import com.android.volley.RequestQueue;
import com.android.volley.toolbox.BasicNetwork;
import com.android.volley.toolbox.DiskBasedCache;
import com.android.volley.toolbox.HurlStack;

public class Volley {

    public static final String URL = "http://192.168.1.7/mutantes/";

    private static Volley instancia;
    private static Context contexto;
    public static String usuario;

    private RequestQueue filaRequest;

    private Volley (Context ctx){
        contexto = ctx;
        filaRequest = getFilaRequest();
    }

    public static synchronized Volley getInstancia(Context contexto){
        if(instancia == null){
            instancia = new Volley(contexto);
        }
        return instancia;
    }

    public RequestQueue getFilaRequest(){
        if(filaRequest == null){
            Cache cache = new DiskBasedCache(contexto.getCacheDir(), 10 *1024*1024);
            Network net = new BasicNetwork(new HurlStack());
            filaRequest = new RequestQueue(cache, net);
            filaRequest.start();
        }
        return filaRequest;
    }
}
