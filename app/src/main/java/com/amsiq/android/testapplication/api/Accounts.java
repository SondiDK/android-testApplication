package com.amsiq.android.testapplication.api;

import okhttp3.ResponseBody;
import retrofit2.Call;
import retrofit2.Response;
import retrofit2.http.GET;

/**
 * Created by tristan on 28/11/2016.
 */

public interface Accounts {

    @GET("accounts")
    Call<ResponseBody> getAccounts();

}
