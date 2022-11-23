package com.ventas.myapplication

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import android.webkit.WebResourceError
import android.webkit.WebResourceRequest
import android.webkit.WebView
import android.webkit.WebViewClient
import android.widget.EditText
import android.widget.Toast
import java.sql.RowId

class MainActivity : AppCompatActivity() {
    private var txtUrl:EditText?=null
    private var navegador:WebView?=null
    private var cargo=false
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        txtUrl=findViewById(R.id.txtUrl)
        navegador=findViewById(R.id.navegador)

        navegador?.clearCache(true)
        navegador?.settings?.javaScriptEnabled=true

        navegador?.webViewClient = object : WebViewClient(){
            override fun onReceivedError(
                view: WebView?,
                request: WebResourceRequest?,
                error: WebResourceError?
            ) {
                super.onReceivedError(view, request, error)
                cargo = false
                Toast.makeText(this@MainActivity,"Error al cargar: $error",Toast.LENGTH_LONG).show()
            }

            override fun onPageFinished(view: WebView?, url: String?) {
                super.onPageFinished(view, url)
                if (cargo){
                    Toast.makeText(this@MainActivity,"La pagina Termino de cargar",Toast.LENGTH_LONG).show()
                }
            }
        }
    }
    fun cargarPagina(view: View){
        cargo = true
        var url= txtUrl?.text.toString()
        navegador?.loadUrl(url)
    }
}